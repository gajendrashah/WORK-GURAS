<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\ChangePasswordFormRequest;
use App\Http\Requests\UpdateProfileFormRequest;
use Auth;
use App\Http\Traits\MailTrait;
use Hash;

class AccountController extends Controller
{
    use MailTrait;

    protected $userRepository;

    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function dashboard()
    {
        return view('site::account.dashboard');
    }

    public function changePassword()
    {
        return view('site::account.change-password');
    }

    public function changePasswordPost(ChangePasswordFormRequest $request)
    {
        $input = $request->all();

        $userHashPassword = Auth::user()->getAuthPassword();

        if (Hash::check($input['current_password'], $userHashPassword)) {

            $user = $this->userRepository->find(Auth::user()->id);
            $user->password = Hash::make($input['new_password']);
            $user->save();
            flash("Password changed successfully")->success();

        } else {

            flash("Old password didn't mach.")->warning();
        }

        return view('site::account.change-password');
    }

    public function changeInfo(){

        $data['user'] = auth()->user();
        return view('site::account.changeinfo',$data);
    }

    public function changeInfoPost(UpdateProfileFormRequest $request)
    {
        $input = $request->all();

        $profileImage = $request->file('profile_image');

        //try {
            
            $user = auth()->user();

            $destinationPath = public_path() . config('dashboard.user-profile');

            if ($fileName = isFileExist($request, $user, 'profile_image', $destinationPath)) {
                $user->profile_image = $fileName;
                $user->update();
            } 

            $user->update(['full_name' => $request->full_name]);

            
            $user->userProfile()->update($request->only([
                'mobile',
                'address_1',
                'address_2',
                'district',
                'profile_image',
            ]));

            $user->save();
            flash("Profile Updated Successfully!")->success();

        // } catch (\Throwable $t) {
        //     flash("Something went wrong")->error();
        // }

        return redirect()->back();
    }

    public function emailVarification() 
    {
        return view('site::account.email-verification');
    }

    public function emailVarificationSubmit(Request $request) 
    {
        $validatedData = $request->validate([
            'varification_code' => 'required',
        ],
        [
            'varification_code.required' => 'Enter you varification code',
        ]);

        $user = Auth::user();
        
        if($user->varification_code == $request->varification_code) {
            $user->update(['email_verified' => true, 'varification_code'=> '']);
            if($user->user_type == "seller"){
                return redirect()->route('seller.property.index');
            }
            elseif($user->user_type == "buyer") {
                return redirect()->route('buyer.buy.product.index');
            }

            flash("Sorry Try, Again.")->warning();
        
            return redirect()->back();
        }


        flash("Your varification code is not match.")->warning();
        
        return redirect()->back();
    }

    public function resendVarificationCode(Request $request) 
    {
        $user = Auth::user();

        $user->update(['email_verified' => false, 'varification_code'=> mt_rand(100000, 999999)]);

        $this->sendVarificationCode($user);

        flash("Please check your mail for varification code.")->success();
        
        return redirect()->back();
    }    
}

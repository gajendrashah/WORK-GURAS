<?php
namespace Modules\Site\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Services\UserService;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Traits\MailTrait;
class AuthController extends Controller
{
    use MailTrait;
    protected $userRepository;
    protected $UserService;
    public function __construct(UserRepository $userRepository, UserService $userService) 
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->intended(route('home'));
        } else {
            return view('site::auth.login');
        }
    }
    public function authenticate(LoginFormRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');
        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password, 'status' => 1], $remember)) {
            return redirect()->intended(route('home'));
        } else {
            Flash::error('Invalid Access');
            return redirect()->intended(route('login'));;
        }
    }
    public function register()
    {
        return view('site::auth.register');
    }
    public function registerPost(UserFormRequest $request)
    {
        $input = $request->all();
        $profileImage = $request->file('profile_image');
        //try {
            $input['registered_ip'] = $request->ip();
            $input['email_verified'] = 0; //remove as
            $input['external_auth'] = 0;
            $input['status'] = 1;
            $input['varification_code'] = mt_rand(100000, 999999);
            if ($user = $this->userService->create($input)) {
                $destinationPath = public_path() . config('dashboard.user-profile');
                if ($fileName = isFileExist($request, $user, 'profile_image', $destinationPath)) {
                    $user->profile_image = $fileName;
                    $user->update();
                } 
                $this->sendVarificationCode($user);
                $userProfile = $user->userProfile()->create($input);

                if ($fileName = isFileExist($request, $user, 'profile_image', $destinationPath)) {
                    $userProfile->profile_image = $fileName;
                    $userProfile->update();
                } 
            }
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                Flash::success("Registered successfully.");
                return redirect()->intended(route('home'));
            }
        // } catch (\Throwable $t) {
        //     flash("Somethig went wrong from our side. Please inform web master.")->error();
        //     return redirect()->back();
        // }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    public function forgotPassword()
    {
        return view('site::auth.forgot-password');
    }
    public function forgotPasswordPost(Request $request)
    {
        $validatedData = $request->validate([
            'email'   => 'required|email',
        ]);
        if ($user = $this->userRepository->getUser('email', $request->email)) {
            $six_digit_random_number = mt_rand(100000, 999999);
            $this->userService->update($user, ['varification_code' => $six_digit_random_number]);
            $user = $this->userRepository->getUser('email', $request->email);
            $this->sendVarificationCode($user);
            flash("Please check your email for reset password!")->success();
            return \redirect()->route('reset-password');
        } else {
            flash("Email is not exist!")->error();
            return \redirect()->back();
        }
    }
    public function resetPassword()
    {
        return view('site::auth.reset-password');
    }
    public function resetPasswordPost(Request $request)
    {
        $validatedData = $request->validate([
            'varification_code'   => 'required',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
        ]);
        if ($request->password != $request->password_confirmation) {
            flash("Password are not matched!")->error();
            return \redirect()->back();
        }
        if ($user = $this->userRepository->getUser('varification_code', $request->varification_code)) {
            $data = ['password' => bcrypt($request['password']), 'varification_code' => ""];
            $user->update($data);
            flash("Successfully changed your password!")->success();
            return \redirect()->route('login');
        } else {
            flash("Varification code is not correct!")->error();
            return \redirect()->back();
        }
    }
    public function confirmMail($user)
    {
        $data = array("verificationCode" => $user->varification_code);
        Mail::send(['html' => 'user::mail.forgot-mail'],  $data, function ($message) use ($user) {
            $message->to($user->email, $user->name)
                ->subject("Forget Password");
            $message->from('birenhl49@gmail.com', "Real Estate Team");
        });
    }
}
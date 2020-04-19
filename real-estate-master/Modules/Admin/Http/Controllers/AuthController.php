<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class AuthController extends Controller
{
    use ValidatesRequests;

    public function login()
    {
        return view('admin::auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return \redirect()->route('admin.dashboard');
        } else {
            Flash::error('Invalid Access');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        return redirect()->route('admin.login');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);
        return redirect()->route('user.profile');
    }
    public function getSingin()
    {
        return view('user.signin');
    }
    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();

    }
    public function getProfile()
    {
        return view('user.profile');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }

}

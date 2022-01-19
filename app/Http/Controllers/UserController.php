<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm()
    {
        $title = "Log In";
        $data = compact('title');
        return view('User.UserLogIn')->with($data);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::select('*')->where('email', $request->email)->get();
        // $user = User::get()->where('email', $request->email);

        // dd($user);

        if ($user[0]->password == md5($request->password)) {
            $request->session()->put('user', $user[0]->toArray());
            return redirect(route('userHome'));
        } else {
            $request->validate([
                'password' => 'password'
            ]);
        }
    }

    //sending to sign up form
    public function signupForm()
    {
        return view('User.UserSignUp');
    }

    //signing up
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'conf_password' => 'required|same:password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->password = md5($request->password);
        $user->save();

        return redirect(url('/login'));
        // dd($pass);
    }

    //managing login logout
    public function sessionManager(Request $request)
    {
        $title = "Guest";
        $user = $request->session()->get('user');
        $status = false;
        if ($user) {
            $status = true;
            $title = $user['name'];
            if ($user['type'] == "A" || $user['type'] == "R") {
                $request->session()->put('AdminUser', $user);
            }
        }
        $data = compact('status', 'user', 'title');
        // dd($data);
        return view('home')->with($data);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        // $request->session()->flush();
        return redirect(url(route('userHome')));
    }
}

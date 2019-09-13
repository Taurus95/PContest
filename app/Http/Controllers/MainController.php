<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class MainController extends Controller
{
    /**
     * Register for new Contestant
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerNew(Request $request)
    {
        $request->validate([
          'name' => 'required|string|max:50',
          'mail' => 'required|email',
          'password' => 'required',
          'confirmPassword' => 'required|same:password'
        ]);
        //register new contestan after validations
        $user = new User;
        $user->email = $request->mail;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();
        //authenticate the user for the sistem
        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * Login
     */
    public function logIn(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|string|max:50'
        ]);
        //retriving the user if it exist
        $user = User::where('email', $request->email)->first();

        if ($user != null && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(["noValid" => "noValid","email" => "noValid", "password" => "noValid"]);
        }
    }

    /**
     * LogOut
     */
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('index');
    }

    /**
     * change language
     */
    public function changeLang(Request $request)
    {
        session(['lang' => $request->lang ]);
        return redirect()->route('index');
    }
}

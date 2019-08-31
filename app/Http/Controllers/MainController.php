<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user->password = $request->password;
        $user->save();
        //authenticate the user for the sistem
        Auth::login($user);

    }

    /**
     * LogOut
     */
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
    }
}

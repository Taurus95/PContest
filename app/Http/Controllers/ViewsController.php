<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Submission;

class ViewsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function dashboard(){

        $categories = Category::all();
        $submissions = Submission::where('id_user',Auth::id())->get();
        foreach ($submissions as $sub) {
            $sub->photography;
        }

        return view('dashboard')->with(compact('categories'))->with(compact('submissions'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('welcome');
    }
    
    public function login(){
        return view('welcome');
    }
}

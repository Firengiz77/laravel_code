<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('front.pages.index');
    }
    public function login(){
        return view('front.pages.login');
    }
    public function register(){
        return view('front.pages.register');
    }
}

<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page(){

        

    return view('frontend.auth.login-page');

    }

    public function register_page(){

        

    return view('frontend.auth.register-page');

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $user;
    public function __construct()
    {
        $user = Auth::user();
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function login_post()
    {

    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function register_post()
    {

    }
}

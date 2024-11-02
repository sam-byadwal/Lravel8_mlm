<?php

namespace App\Http\Controllers\users\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index(){
   
        return view('auth.login');
    }
}

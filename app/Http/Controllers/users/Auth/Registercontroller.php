<?php

namespace App\Http\Controllers\users\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registercontroller extends Controller
{
 public function index(){

    return view('auth.register');


 }
}

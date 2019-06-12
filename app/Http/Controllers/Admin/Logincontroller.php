<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Logincontroller extends Controller
{
    
    public function index(){
        return view('user.login');
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    
    public function verify(){
        
    }
}

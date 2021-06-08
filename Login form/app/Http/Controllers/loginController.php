<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
     public function index(){
         return view('login.login');
     }
     public function posted(){
        echo "thank you for your Submission...";
     }

    

}

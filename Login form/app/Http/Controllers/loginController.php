<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function home(){
        return view('user.home');
    }
    public function posted(Request $req)
    {
        if ($req->uname == $req->password) {
            return redirect("/home")->with("user_name", $req->uname)
                                    -> with("id" , "15");
        } else {
            echo "Invalid Passsword";
        }
    }
}

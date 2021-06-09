<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users  = [
            ['id' => 1, 'name' => 'Robert', 'email' => 'rober@email.com'],
            ['id' => 2, 'name' => 'devid', 'email' => 'devid@email.com'],
            ['id' => 3, 'name' => 'messi', 'email' => 'messi@email.com']
        ];

        return view("list.userlist") -> with('userlist' , $users);
    }
}

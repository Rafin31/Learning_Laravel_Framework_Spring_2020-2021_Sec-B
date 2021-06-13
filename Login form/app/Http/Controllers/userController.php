<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    protected $userList = [
        ['id' => 1, 'name' => 'almain', 'email' => 'email@email.com'],
        ['id' => 2, 'name' => 'abc', 'email' => 'abc@email.com'],
        ['id' => 3, 'name' => 'xyz', 'email' => 'xyz@email.com']
    ];

    public function index()
    {
        return redirect("user.home");
    }
    public function userLists()
    {
        $users = $this->userList;
        return view('user.list')->with('userList', $users);
    }

    public function details($id)
    {
        $users = $this->userList;
        $user = '';
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function insert(Request $req)
    {

        $users = $this->userList;
        $id = count($users) + 1;
        $user = ['id' => $id, 'name' => $req->uname, 'email' => $req->email];
        array_push($this->userList, $user);
        return view('user.list')->with('userList', $this->userList);
    }

    public function edit($id)
    {
        $users = $this->userList;
        $user = '';
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                $user = $u;
                break;
            }
        }

        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id)
    { 
        $updatedArray = $this->destroy($id);
        $user = ['id' =>$req->id, 'name' => $req->uname, 'email' => $req->email];
        array_push( $updatedArray, $user);
        return view('user.list')->with('userList',  $updatedArray);
    }

    public function delete($id)
    {
        $users = $this->userList;
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['id'] == $id) {
                unset($users[$i]);
            }
        }

        return view('user.list')->with('userList', $users);
    }

    public function destroy($id)
    {
        $users = $this->userList;
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['id'] == $id) {
                unset($users[$i]);
            }
        }
        return  $users ;
    }


    // public function getUserList(){
    //     return [
    //         ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
    //         ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
    //         ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
    //     ];
    // }

    // public fucntion updateArrayList(){

    // }

    public function logout()
    {
        return redirect("/login");
    }
}

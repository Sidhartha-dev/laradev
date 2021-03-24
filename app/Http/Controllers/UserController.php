<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::paginate(8);
        return view('admin.Users.UserList', compact('users'));
    }
}

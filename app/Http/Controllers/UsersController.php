<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = App\User::all();
        return view('users.users', compact('users'));
    }

    public function information($id)
    {
        $user = App\User::find($id);
        return view('users.user', compact('user'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        // i think we should define the pagination range like below
        $users = User::paginate(15);

        return view('users.index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $users = User::get();
//        $users = User::first();
//        dd($users);
//        return view('index', $users);

        return view('index', ['users' => $users]);

    }
}

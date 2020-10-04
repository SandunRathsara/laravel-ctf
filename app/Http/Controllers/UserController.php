<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return User::all();
    }
}

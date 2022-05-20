<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function createUser()
    {
        return view('admin.user.create');
    }
}

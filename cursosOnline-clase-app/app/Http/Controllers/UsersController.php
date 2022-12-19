<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate(12);
        return view('usuarios', compact('users'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('usuarios-show', compact('user'));
    }

}

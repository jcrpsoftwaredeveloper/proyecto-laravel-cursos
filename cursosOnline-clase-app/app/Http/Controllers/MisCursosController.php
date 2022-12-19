<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisCursosController extends Controller
{
    public function __invoke(){
        return view('home');
    }
}

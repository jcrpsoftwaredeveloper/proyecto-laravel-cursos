<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    public function index(){
        $perfiles = Perfil::paginate(12);
        return view('perfiles', compact('perfiles'));
    }

    public function show($id) {
        $perfil = Perfil::find($id);
        return view('perfiles-show', compact('perfil'));
    }

}

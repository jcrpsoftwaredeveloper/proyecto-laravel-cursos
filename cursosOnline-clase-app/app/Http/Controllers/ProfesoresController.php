<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::paginate(12);
        return view('profesores', compact('profesores'));
    }

    public function show($id) {
        $profesor = Profesor::find($id);
        return view('profesores-show', compact('profesor'));
    }

}

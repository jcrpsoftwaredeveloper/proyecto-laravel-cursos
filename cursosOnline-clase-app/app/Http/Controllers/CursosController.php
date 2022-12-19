<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::paginate(12);
        return view('cursos', compact('cursos'));
    }

    public function show($id) {
        $curso = Curso::find($id);
        return view('cursos-show', compact('curso'));
    }
}

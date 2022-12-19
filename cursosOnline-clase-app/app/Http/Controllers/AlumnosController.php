<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Alumno_curso;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){

        $alumnos = Alumno::paginate(12);

        return view('alumnos', compact('alumnos'));
    }

    public function show($id) {
        $alumno = Alumno::find($id);
        return view('alumnos-show', compact('alumno'));
    }

}

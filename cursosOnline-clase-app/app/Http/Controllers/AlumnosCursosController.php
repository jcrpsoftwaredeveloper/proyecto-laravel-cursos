<?php

namespace App\Http\Controllers;

use App\Models\Alumno_curso;

class AlumnosCursosController extends Controller
{
    public function index(){
        $alumnos_cursos = Alumno_curso::paginate(12);
        return view('alumnos_cursos', compact('alumnos_cursos'));
    }

    public function show($id) {
        $alumno_curso = Alumno_curso::find($id);
        return view('alumnos_cursos-show', compact('alumno_curso'));
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Alumno_cursoRequest;
use App\Models\Alumno_curso;

class AlumnosCursosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos_cursos = Alumno_curso::paginate(12);
        return view('admin.alumnos_cursos.index', compact('alumnos_cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos_cursos = Alumno_curso::latest()->get()->take(10);
        $alumno_curso = new Alumno_curso();
        return view('admin.alumnos_cursos.create', compact('alumnos_cursos', 'alumno_curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(Alumno_cursoRequest $request)
    {
        $requestData = $request->all();

        try {
            $alumno_curso = Alumno_curso::create($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El alumno ha sido guardado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El alumno no pudo ser guardado"]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno_curso $alumno_curso)
    {
        return view('admin.alumnos_cursos.show', compact('alumno_curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno_curso = Alumno_curso::find($id);
        $alumnos_cursos = Alumno_curso::latest('updated_at')->get()->take(10);
        return view('admin.alumnos_cursos.edit', compact('alumnos_cursos', 'alumno_curso'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Alumno_cursoRequest $request, Alumno_curso $alumno_curso)
    {
        $requestData = $request->all();

        try {
            $alumno_curso->update($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El alumno ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El alumno no pudo ser modificado"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno_curso $alumno)
    {
        try {
            $alumno->delete();
            return redirect()->route('admin.alumnos.index')->with(['alertSuccess' => 'El alumno ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.alumnos.index')->with(['alertError'=>"El alumno no pudo ser borrado"]);
        }
    }

    public function delete(Alumno_curso $alumno)
    {
        $alumnos = Alumno_curso::latest('updated_at')->get()->take(10);  //muestra los ultimos 10 articulos modificados
        return view('admin.alumnos.delete',
            compact('alumnos', 'alumno'));
    }
}

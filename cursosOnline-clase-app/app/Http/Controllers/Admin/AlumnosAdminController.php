<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumnoRequest;
use App\Models\Alumno;
use App\Models\User;

class AlumnosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $alumnos = Alumno::paginate(12);   //return view('admin/alumnos/index', compact('alumnos'));
        return view('admin.alumnos.index', compact('alumnos', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::latest()->get()->take(10);  //muestra los ultimos 10 categorias añadidos
        $alumno = new Alumno();
        $users = User::all();
        return view('admin.alumnos.create', compact('alumnos', 'alumno', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(AlumnoRequest $request)
    {
        $requestData = $request->all();

        try {
//
            $alumno = Alumno::create($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'El alumno ha sido guardado']);
        } catch(\Exception $e){
            return redirect()->back()
                ->with(['alertError'=>"El alumno no pudo ser guardado"]);
        }

//        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        $users = User::all();
        return view('admin.alumnos.show', compact('alumno', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    // Se puede poner edit(Categoria $categoria) y no find
    {
        $alumno = Alumno::find($id);
        $users = User::all(); //TODO nuevo
        //dd($categoria);
        $alumnos = Alumno::latest('updated_at')->get()->take(10);  //muestra los ultimos 10 articulos modificados
        return view('admin.alumnos.edit', compact('alumnos', 'alumno', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, Alumno $alumno)
    {
        $requestData = $request->all();

        try {
            $alumno->update($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'El alumno ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()
                ->with(['alertError'=>"El alumno no pudo ser modificado"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        try {
            $alumno->delete();
            return redirect()->route('admin.alumnos.index')->with(['alertSuccess' => 'El alumno ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.alumnos.index')->with(['alertError'=>"El alumno no pudo ser borrado"]);
        }
    }

    public function delete(Alumno $alumno)
    {
        $alumnos = Alumno::latest('updated_at')->get()->take(10);  //muestra los ultimos 10 articulos modificados
        $users = User::all();
        return view('admin.alumnos.delete',
            compact('alumnos', 'alumno', 'users'));
    }
}

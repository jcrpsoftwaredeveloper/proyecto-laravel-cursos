<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CursoRequest;
use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Profesor;
use App\Models\User;

class CursosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate(12);
        $categorias = Categoria::all();
        $profesores = Profesor::all();
        $users = User::all();
        return view('admin.cursos.index', compact('cursos', 'categorias', 'profesores', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::latest()->get()->take(10);
        $curso = new Curso();
        $categorias = Categoria::all();
        $profesores = Profesor::all();
        $users = User::all();
        return view('admin.cursos.create', compact('cursos', 'curso', 'categorias', 'profesores', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(CursoRequest $request)
    {
        $requestData = $request->all();
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino = 'images/cursos/';
            $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
            $fileName = $uuid . '_' . $file->getClientOriginalName();
            $uploaded = $request->file('imagen')->move($destino, $fileName);
            $requestData['imagen'] = $destino . $fileName;
        }

        try {
            $curso = Curso::create($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'El usuario ha sido guardado']);
        } catch(\Exception $e){
            dd($e);
            return redirect()->back()
                ->with(['alertError'=>"El usuario no pudo ser guardado"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        $categorias = Categoria::all();
        $profesores = Profesor::all();
        $users = User::all();
        return view('admin.cursos.show', compact('curso', 'categorias', 'profesores', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        $categorias = Categoria::all();
        $cursos = Curso::latest('updated_at')->get()->take(10);
        $profesores = Profesor::all();
        $users = User::all();
        return view('admin.cursos.edit', compact('cursos', 'curso', 'categorias', 'profesores', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, Curso $curso)
    {
        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino = 'images/cursos/';
            $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
            $fileName = $uuid . '_' . $file->getClientOriginalName();
            $uploaded = $request->file('imagen')->move($destino, $fileName);
            $requestData['imagen'] = $destino . $fileName;
        }

        try {
            $curso->update($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'El curso ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()
                ->with(['alertError'=>"El curso no pudo ser modificado"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        try {
            $curso->delete();
            return redirect()->route('admin.cursos.index')->with(['alertSuccess' => 'El curso ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.cursos.index')->with(['alertError'=>"El curso no pudo ser borrado"]);
        }
    }

    public function delete(Curso $curso)
    {
        $cursos = Curso::latest('updated_at')->get()->take(10);
        $categorias = Categoria::all();
        $profesores = Profesor::all();
        $users = User::all();
        return view('admin.cursos.delete', compact('cursos', 'curso', 'categorias', 'profesores', 'users'));
    }
}

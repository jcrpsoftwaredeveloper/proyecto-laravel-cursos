<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfesorRequest;
use App\Models\Profesor;
use App\Models\User;

class ProfesoresAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::paginate(12);
        $users = User::all();
        return view('admin.profesores.index', compact('profesores', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::latest()->get()->take(10);
        $profesor = new Profesor();
        $users = User::all();
        return view('admin.profesores.create', compact('profesores', 'profesor', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(ProfesorRequest $request)
    {
        $requestData = $request->all();

        try {
//
            $profesor = Profesor::create($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El profesor ha sido guardado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El profesor no pudo ser guardado"]);
        }

//        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::find($id);
        $users = User::all();
        return view('admin.profesores.show', compact('profesor', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::find($id);
        $profesores = Profesor::latest('updated_at')->get()->take(10);
        $users = User::all();
        return view('admin.profesores.edit', compact('profesores', 'profesor', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfesorRequest $request, int $id)
    {
        $requestData = $request->all();
        $profesor = Profesor::find($id);
        try {
            //dd($profesor);
            $profesor->update($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'El profesor ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()
                ->with(['alertError'=>"El profesor no pudo ser modificado"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        try {
            $profesor->delete();
            return redirect()->route('admin.profesores.index')->with(['alertSuccess' => 'El profesor ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.profesores.index')->with(['alertError'=>"El profesor no pudo ser borrado"]);
        }
    }

    public function delete(Profesor $profesor)
    {
        $profesores = Profesor::latest('updated_at')->get()->take(10);
        $users = User::all();
        return view('admin.profesores.delete', compact('profesores', 'profesor', 'users'));
    }
}

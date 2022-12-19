<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PerfilRequest;
use App\Models\Perfil;
use App\Models\User;
use Illuminate\Http\Request;

class PerfilesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfil::paginate(12);
        $users = User::all();
        return view('admin.perfiles.index', compact('perfiles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perfiles = Perfil::latest()->get()->take(10);
        $perfil = new Perfil();
        $users = User::all();
        return view('admin.perfiles.create', compact('perfiles', 'perfil', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfilRequest $request)
    {
        $requestData = $request->all();

        try {
            $perfil = Perfil::create($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El perfil ha sido guardado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El perfil no pudo ser guardado"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::find($id);
        $users = User::all();
        return view('admin.perfiles.show', compact('perfil', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = Perfil::find($id);
        $perfiles = Perfil::latest('updated_at')->get()->take(10);
        $users = User::all();
        return view('admin.perfiles.edit', compact('perfiles', 'perfil', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilRequest $request, $id)
    {
        $requestData = $request->all();
        $perfil = Perfil::find($id);
        try {
            $perfil->update($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El perfil ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El perfil no pudo ser modificado"]);
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
        $perfil = Perfil::find($id);
        try {
            $perfil->delete();
            return redirect()->route('admin.perfiles.index')->with(['alertSuccess' => 'El perfil ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.perfiles.index')->with(['alertError'=>"El perfil no pudo ser borrada"]);
        }
    }

    public function delete($id)
    {
        $perfil = Perfil::find($id);
        $perfiles = Perfil::latest('updated_at')->get()->take(10);
        $users = User::all();
        return view('admin.perfiles.delete',
            compact('perfiles', 'perfil', 'users'));
    }
}

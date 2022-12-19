<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(12);
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::latest()->get()->take(10);
        $categoria = new Categoria();
        return view('admin.categorias.create', compact('categorias', 'categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(CategoriaRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino = 'images/categorias/';
            $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
            $fileName = $uuid . '_' . $file->getClientOriginalName();
            $uploaded = $request->file('imagen')->move($destino, $fileName);
            $requestData['imagen'] = $destino . $fileName;
        }

        try {
            $categoria = Categoria::create($requestData);
            return redirect()->back()
                ->with(['alertSuccess' => 'La categoria ha sido guardada']);
        } catch(\Exception $e){
            return redirect()->back()
                ->with(['alertError'=>"La categoría no pudo ser guardada"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        $categorias = Categoria::latest('updated_at')->get()->take(10);
        return view('admin.categorias.edit', compact('categorias', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaRequest $request, Categoria $categoria)
    {
        $requestData = $request->all();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino = 'images/categorias/';
            $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
            $fileName = $uuid . '_' . $file->getClientOriginalName();
            $uploaded = $request->file('imagen')->move($destino, $fileName);
            $requestData['imagen'] = $destino . $fileName;
        }

        try {
            $categoria->update($requestData);
            return redirect()->back()->with(['alertSuccess' => 'La categoria ha sido modificada']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"La categoría no puedo ser modificada"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        try {
            $categoria->delete();
            return redirect()->route('admin.categorias.index')->with(['alertSuccess' => 'La categoria ha sido borrada']);
        } catch(\Exception $e){
            dd($e);
            return redirect()->route('admin.categorias.index')->with(['alertError'=>"La categoría no puedo ser borrada"]);
        }
    }

    public function delete(Categoria $categoria)
    {
        $categorias = Categoria::latest('updated_at')->get()->take(10);
        return view('admin.categorias.delete', compact('categorias', 'categoria'));
    }
}

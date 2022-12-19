<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::paginate(12);
        return view('categorias', compact('categorias'));
    }

    public function show($id) {
        $categoria = Categoria::find($id);
        return view('categorias-show', compact('categoria'));
    }

}

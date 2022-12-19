@extends('layouts.app-admin')

@section('title','Gestión de categorias')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Categorías')
@section('subtitleOption','Edita Categoria')


@section('main')

    <form action="{{route('admin.categorias.destroy',$categoria)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-categorias.form :categoria="$categoria" titleSubmit="Borrar"  readonly="readonly" />
    </form>

    <hr>

    <x-categorias.list :categorias="$categorias"/>

@endsection

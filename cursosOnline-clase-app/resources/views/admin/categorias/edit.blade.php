@extends('layouts.app-admin')

@section('title','Gestión de categorias')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Categorías')
@section('subtitleOption','Edita Categoria')


@section('main')

    <form action="{{route('admin.categorias.update',$categoria)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-categorias.form :categoria="$categoria" titleSubmit="Modificar"/>
    </form>

    <hr>

    <x-categorias.list :categorias="$categorias"/>

@endsection

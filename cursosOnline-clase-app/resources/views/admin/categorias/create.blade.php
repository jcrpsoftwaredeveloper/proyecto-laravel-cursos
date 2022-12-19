@extends('layouts.app-admin')

@section('title','Gestión de categorias')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Categorías')
@section('subtitleOption','Nueva Categoria')


@section('main')

    <form action="{{route('admin.categorias.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-categorias.form :categoria="$categoria" titleSubmit="Guardar"/>
    </form>

    <hr>

    <x-categorias.list :categorias="$categorias"/>

@endsection

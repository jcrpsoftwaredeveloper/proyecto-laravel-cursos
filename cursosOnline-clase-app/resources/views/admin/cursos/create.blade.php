@extends('layouts.app-admin')

@section('title','Gestión de cursos')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Cursos')
@section('subtitleOption','Nuevo Curso')


@section('main')

    <form action="{{route('admin.cursos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-cursos.form :curso="$curso" titleSubmit="Guardar" :categorias="$categorias" :profesores="$profesores" :users="$users"/>
    </form>

    <hr>

    <x-cursos.list :cursos="$cursos" :categorias="$categorias" :profesores="$profesores" :users="$users"/>

@endsection

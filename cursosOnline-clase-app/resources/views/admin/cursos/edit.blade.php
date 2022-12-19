@extends('layouts.app-admin')

@section('title','Gestión de cursos')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Cursos')
@section('subtitleOption','Edita Curso')


@section('main')

    <form action="{{route('admin.cursos.update',$curso)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-cursos.form :curso="$curso" titleSubmit="Modificar" :categorias="$categorias" :profesores="$profesores" :users="$users"/>
    </form>

    <hr>

    <x-cursos.list :cursos="$cursos" :categorias="$categorias" :profesores="$profesores" :users="$users"/>

@endsection

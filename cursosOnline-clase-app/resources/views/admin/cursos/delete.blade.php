@extends('layouts.app-admin')

@section('title','Gestión de cursos')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Cursos')
@section('subtitleOption','Edita Curso')


@section('main')

    <form action="{{route('admin.cursos.destroy',$curso)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-cursos.form :curso="$curso" titleSubmit="Borrar"  readonly="readonly" :categorias="$categorias" :profesores="$profesores" :users="$users"/>
    </form>

    <hr>

    <x-cursos.list :cursos="$cursos" :categorias="$categorias" :profesores="$profesores" :users="$users"/>

@endsection

@extends('layouts.app-admin')

@section('title','Gestión de cursos')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Cursos')
@section('subtitleOption','Gestión de Cursos')
@section('urlAdd',route('admin.cursos.create'))


@section('main')
    <x-cursos.list :cursos="$cursos" :categorias="$categorias" :profesores="$profesores" :users="$users"/>

    <br>

    {{$cursos->links()}}
@endsection

@extends('layouts.app-admin')

@section('title','Gestión de cursos')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Cursos')
@section('subtitleOption','Consulta Curso')


@section('main')

    <x-cursos.form :curso="$curso" readonly="readonly" titleSubmit="" :categorias="$categorias" :profesores="$profesores" :users="$users"/>

@endsection

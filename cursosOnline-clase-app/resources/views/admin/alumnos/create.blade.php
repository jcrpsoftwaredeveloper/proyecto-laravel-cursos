@extends('layouts.app-admin')

@section('title','Gestión de alumnos')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Alumnos')
@section('subtitleOption','Nuevo Alumno')


@section('main')

    <form action="{{route('admin.alumnos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-alumnos.form :alumno="$alumno" titleSubmit="Guardar" :users="$users"/>
    </form>

    <hr>

    <x-alumnos.list :alumnos="$alumnos" :users="$users"/>

@endsection

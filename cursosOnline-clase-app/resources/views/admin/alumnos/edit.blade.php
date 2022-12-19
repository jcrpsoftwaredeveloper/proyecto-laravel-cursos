@extends('layouts.app-admin')

@section('title','Gestión de alumnos')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Alumnos')
@section('subtitleOption','Edita Alumno')


@section('main')

    <form action="{{route('admin.alumnos.update',$alumno)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-alumnos.form :alumno="$alumno" titleSubmit="Modificar" :users="$users"/>
    </form>

    <hr>

    <x-alumnos.list :alumnos="$alumnos" :users="$users"/>

@endsection

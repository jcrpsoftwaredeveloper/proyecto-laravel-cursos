@extends('layouts.app-admin')

@section('title','Gestión de alumnos')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Alumnos')
@section('subtitleOption','Edita Alumno')


@section('main')

    <form action="{{route('admin.alumnos.destroy',$alumno)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-alumnos.form :alumno="$alumno" titleSubmit="Borrar"  readonly="readonly" :users="$users"/>
    </form>

    <hr>

    <x-alumnos.list :alumnos="$alumnos" :users="$users"/>

@endsection

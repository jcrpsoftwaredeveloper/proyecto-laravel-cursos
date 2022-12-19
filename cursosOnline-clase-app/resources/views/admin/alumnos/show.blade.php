@extends('layouts.app-admin')

@section('title','Gestión de alumnos')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Alumnos')
@section('subtitleOption','Consulta Alumno')


@section('main')

    <x-alumnos.form :alumno="$alumno" readonly="readonly" titleSubmit="" :users="$users"/>

@endsection

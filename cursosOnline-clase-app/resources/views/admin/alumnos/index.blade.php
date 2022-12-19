@extends('layouts.app-admin')

@section('title','Gestión de alumnos')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Alumnos')
@section('subtitleOption','Gestión de Alumnos')
@section('urlAdd',route('admin.alumnos.create'))


@section('main')
    <x-alumnos.list :alumnos="$alumnos" :users="$users"/>

    <br>

    {{$alumnos->links()}}
@endsection

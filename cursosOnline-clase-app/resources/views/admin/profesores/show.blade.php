@extends('layouts.app-admin')

@section('title','Gestión de profesores')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Profesores')
@section('subtitleOption','Consulta Profesor')


@section('main')

    <x-profesores.form :profesor="$profesor" readonly="readonly" titleSubmit="" :users="$users"/>

@endsection

@extends('layouts.app-admin')

@section('title','Gestión de usuarios')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Usuarios')
@section('subtitleOption','Consulta Usuario')


@section('main')

    <x-usuarios.form :user="$user" readonly="readonly" titleSubmit=""/>

@endsection

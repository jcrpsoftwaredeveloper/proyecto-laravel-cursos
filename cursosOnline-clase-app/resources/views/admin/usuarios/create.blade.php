@extends('layouts.app-admin')

@section('title','Gestión de usuarios')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Usuarios')
@section('subtitleOption','Nuevo Usuario')


@section('main')

    <form action="{{route('admin.usuarios.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-usuarios.form :user="$user" titleSubmit="Guardar"/>
    </form>

    <hr>

    <x-usuarios.list :users="$users"/>

@endsection

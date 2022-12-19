@extends('layouts.app-admin')

@section('title','Gestión de Usuarios')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Usuarios')
@section('subtitleOption','Edita Usuario')


@section('main')

    <form action="{{route('admin.usuarios.update',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-usuarios.form :user="$user" titleSubmit="Modificar"/>
    </form>

    <hr>

    <x-usuarios.list :users="$users"/>

@endsection

@extends('layouts.app-admin')

@section('title','Gestión de usuarios')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Usuarios')
@section('subtitleOption','Gestión de Usuarios')
@section('urlAdd',route('admin.usuarios.create'))


@section('main')
    <x-usuarios.list :users="$users"/>

    <br>

    {{$users->links()}}
@endsection


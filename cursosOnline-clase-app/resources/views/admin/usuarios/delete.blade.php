@extends('layouts.app-admin')

@section('title','Gestión de usuarios')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Usuarios')
@section('subtitleOption','Borra Usuario')


@section('main')

    <form action="{{route('admin.usuarios.destroy',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-usuarios.form :user="$user" titleSubmit="Borrar"  readonly="readonly" />
    </form>

    <hr>

    <x-usuarios.list :users="$users"/>

@endsection

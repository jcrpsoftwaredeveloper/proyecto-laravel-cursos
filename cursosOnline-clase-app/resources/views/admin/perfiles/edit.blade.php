@extends('layouts.app-admin')

@section('title','Gestión de perfiles')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Perfiles')
@section('subtitleOption','Edita Perfil')


@section('main')

    <form action="{{route('admin.perfiles.update',$perfil)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-perfiles.form :perfil="$perfil" titleSubmit="Modificar" :users="$users"/>
    </form>

    <hr>

    <x-perfiles.list :perfiles="$perfiles" :users="$users"/>

@endsection

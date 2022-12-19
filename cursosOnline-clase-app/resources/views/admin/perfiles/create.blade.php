@extends('layouts.app-admin')

@section('title','Gestión de perfiles')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Perfiles')
@section('subtitleOption','Nueva Categoria')


@section('main')

    <form action="{{route('admin.perfiles.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-perfiles.form :perfil="$perfil" titleSubmit="Guardar" :users="$users"/>
    </form>

    <hr>

    <x-perfiles.list :perfiles="$perfiles" :users="$users"/>

@endsection

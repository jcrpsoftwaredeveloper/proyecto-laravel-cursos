@extends('layouts.app-admin')

@section('title','Gestión de perfiles')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Perfiles')
@section('subtitleOption','Consulta Perfil')


@section('main')

    <x-perfiles.form :perfil="$perfil" readonly="readonly" titleSubmit="" :users="$users"/>

@endsection

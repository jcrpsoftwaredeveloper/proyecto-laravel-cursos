@extends('layouts.app-admin')

@section('title','Gestión de profesores')

@section('iconOption')
    <i class="fa-solid fa-plus"></i>
@endsection
@section('titleOption','Profesores')
@section('subtitleOption','Nuevo profesor')


@section('main')

    <form action="{{route('admin.profesores.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-profesores.form :profesor="$profesor" titleSubmit="Guardar" :users="$users"/>
    </form>

    <hr>

    <x-profesores.list :profesores="$profesores" :users="$users"/>

@endsection

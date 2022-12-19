@extends('layouts.app-admin')

@section('title','Gestión de profesores')

@section('iconOption')
    <i class="fa-solid fa-pen-to-square"></i>
@endsection
@section('titleOption','Profesores')
@section('subtitleOption','Edita Profesor')


@section('main')

    <form action="{{route('admin.profesores.update',$profesor)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-profesores.form :profesor="$profesor" titleSubmit="Modificar" :users="$users"/>
    </form>

    <hr>

    <x-profesores.list :profesores="$profesores" :users="$users"/>

@endsection

@extends('layouts.app-admin')

@section('title','Gestión de profesores')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Profesores')
@section('subtitleOption','Borra Profesor')


@section('main')

    <form action="{{route('admin.profesores.destroy',$profesor)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-profesores.form :profesor="$profesor" titleSubmit="Borrar"  readonly="readonly" :users="$users"/>
    </form>

    <hr>

    <x-profesores.list :profesores="$profesores" :users="$users"/>

@endsection

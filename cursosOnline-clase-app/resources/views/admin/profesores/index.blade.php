@extends('layouts.app-admin')

@section('title','Gestión de profesores')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Profesores')
@section('subtitleOption','Gestión de Profesores')
@section('urlAdd',route('admin.profesores.create'))


@section('main')
    <x-profesores.list :profesores="$profesores" :users="$users"/>

    <br>

    {{$profesores->links()}}
@endsection

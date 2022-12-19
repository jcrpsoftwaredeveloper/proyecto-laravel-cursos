@extends('layouts.app-admin')

@section('title','Gestión de perfiles')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Perfiles')
@section('subtitleOption','Gestión de Perfiles')
@section('urlAdd',route('admin.perfiles.create'))


@section('main')
    <x-perfiles.list :perfiles="$perfiles" :users="$users"/>

    <br>

    {{$perfiles->links()}}
@endsection

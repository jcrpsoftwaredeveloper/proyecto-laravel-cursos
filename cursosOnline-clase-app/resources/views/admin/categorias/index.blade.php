@extends('layouts.app-admin')

@section('title','Gestión de categorias')

@section('iconOption')
    <i class="fa-solid fa-list"></i>
@endsection
@section('titleOption','Categorías')
@section('subtitleOption','Gestión de Categorías')
@section('urlAdd',route('admin.categorias.create'))


@section('main')
    <x-categorias.list :categorias="$categorias"/>

    <br>

    {{$categorias->links()}}
@endsection

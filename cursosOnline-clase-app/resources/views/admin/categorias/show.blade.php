@extends('layouts.app-admin')

@section('title','Gestión de categorias')

@section('iconOption')
    <i class="fa-solid fa-gear"></i>
@endsection
@section('titleOption','Categorías')
@section('subtitleOption','Consulta Categoría')


@section('main')

    <x-categorias.form :categoria="$categoria" readonly="readonly" titleSubmit=""/>

@endsection

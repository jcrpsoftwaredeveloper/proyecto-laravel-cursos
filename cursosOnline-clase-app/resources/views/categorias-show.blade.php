@extends('layouts.app-main')

@section('title','Categorias')

@section('titleOption','CATEGORIAS')

@section('main')

<x-categorias.form :categoria="$categoria" readonly="readonly" titleSubmit=""/>

@endsection

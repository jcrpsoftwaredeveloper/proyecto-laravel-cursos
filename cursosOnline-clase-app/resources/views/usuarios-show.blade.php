@extends('layouts.app-main')

@section('title','Usuarios')

@section('titleOption','USUARIOS')

@section('main')

<x-usuarios.form :user="$user" readonly="readonly" titleSubmit=""/>

@endsection

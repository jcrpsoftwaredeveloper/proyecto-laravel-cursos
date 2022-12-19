@extends('layouts.app-main')

@section('title','Profesores')

@section('titleOption','PROFESORES')

@section('main')
    PROFESORES...

    <x-profesores.galeria :profesores="$profesores"/>

    {{$profesores->links()}}

@endsection

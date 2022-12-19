@extends('layouts.app-main')

@section('title','Alumnos')

@section('titleOption','ALUMNOS')

@section('main')
    ALUMNOS...

    <x-alumnos.galeria :alumnos="$alumnos"/>

    {{$alumnos->links()}}

@endsection

@extends('layouts.app-main')

@section('title','Cursos')

@section('titleOption','CURSOS')

@section('main')
    CURSOS...

    <x-cursos.galeria :cursos="$cursos"/>

    {{$cursos->links()}}

@endsection

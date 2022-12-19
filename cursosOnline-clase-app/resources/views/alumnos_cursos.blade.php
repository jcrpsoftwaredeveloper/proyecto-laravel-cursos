@extends('layouts.app-main')

@section('title','Alumnos_cursos')

@section('titleOption','ALUMNOS_CURSOS')

@section('main')
    ALUMNOS_CURSOS...

    <x-alumnos_cursos.galeria :alumnos_cursos="$alumnos_cursos"/>

    {{$alumnos_cursos->links()}}

@endsection

@extends('layouts.app-main')

@section('title','Alumnos_cursos')

@section('titleOption','ALUMNOS_CURSOS')

@section('main')

<x-alumnos_cursos.form :alumno_curso="$alumno_curso" readonly="readonly" titleSubmit=""/>

@endsection

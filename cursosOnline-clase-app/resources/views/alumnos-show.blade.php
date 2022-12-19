@extends('layouts.app-main')

@section('title','Alumnos')

@section('titleOption','ALUMNOS')

@section('main')

<x-alumnos.form :alumno="$alumno" readonly="readonly" titleSubmit=""/>

@endsection

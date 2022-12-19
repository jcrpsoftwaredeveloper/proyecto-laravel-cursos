@extends('layouts.app-main')

@section('title','Cursos')

@section('titleOption','CURSOS')

@section('main')

<x-cursos.form :curso="$curso" readonly="readonly" titleSubmit=""/>

@endsection

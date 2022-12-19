@extends('layouts.app-main')

@section('title','Profesores')

@section('titleOption','PROFESORES')

@section('main')

<x-profesores.form :profesor="$profesor" readonly="readonly" titleSubmit=""/>

@endsection

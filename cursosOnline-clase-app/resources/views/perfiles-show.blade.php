@extends('layouts.app-main')

@section('title','Perfiles')

@section('titleOption','PERFILES')

@section('main')

<x-perfiles.form :perfil="$perfil" readonly="readonly" titleSubmit=""/>

@endsection

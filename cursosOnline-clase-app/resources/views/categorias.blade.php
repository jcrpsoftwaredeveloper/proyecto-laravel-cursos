@extends('layouts.app-main')

@section('title','Categorias')

@section('titleOption','CATEGORIAS')

@section('main')
    CATEGORIAS...
{{--    <br>--}}
{{--    @foreach($categorias as $categoria)--}}
{{--       {{$categoria->ref}}--}}
{{--       <br>--}}
{{--       {{$categoria->titulo}}--}}
{{--       <br>--}}
{{--       {{$categoria->descripcion}}--}}
{{--       <br>--}}
{{--       <img src="{{asset($categoria->imagen)}}"--}}
{{--    @endforeach--}}

    <x-categorias.galeria :categorias="$categorias"/>

    {{$categorias->links()}}

@endsection

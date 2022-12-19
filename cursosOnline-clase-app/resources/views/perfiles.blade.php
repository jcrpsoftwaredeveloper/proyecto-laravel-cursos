@extends('layouts.app-main')

@section('title','Perfiles')

@section('titleOption','PERFILES')

@section('main')
    PERFILES...
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

    <x-perfiles.galeria :perfiles="$perfiles"/>

    {{$perfiles->links()}}

@endsection

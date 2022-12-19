@extends('layouts.app-main')

@section('title','Usuarios')

@section('titleOption','USUARIOS')

@section('main')
    USUARIOS...
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

    <x-usuarios.galeria :users="$users"/>

    {{$users->links()}}

@endsection

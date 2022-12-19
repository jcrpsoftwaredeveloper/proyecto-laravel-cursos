@extends('layouts.app-admin')

@section('title','Gestión de perfiles')

@section('iconOption')
    <i class="fa-solid fa-trash"></i>
@endsection
@section('titleOption','Perfiles')
@section('subtitleOption','Edita Perfil')


@section('main')

    <form action="{{route('admin.perfiles.destroy',$perfil)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <x-perfiles.form :perfil="$perfil" titleSubmit="Borrar"  readonly="readonly" :users="$users"/>
    </form>

    <hr>

    <x-perfiles.list :perfiles="$perfiles" :users="$users"/>

@endsection

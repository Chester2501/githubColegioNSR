@extends('layouts.plantilla')

@section('title','curso create')

@section('content')


    <h1>en este curso crearas</h1>

     <form action="{{route('cursos.store')}}" method="POST">
        @csrf
    <label for="">
    Nombre:
    <br>
    <input type="text" name="nombre" id="" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label for="">
    Descripcion:
    <br>
    <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    
    </label>
     @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label for="">
    Categoria:
    <br>
    <input type="text" name="categoria" id="" value="{{old('categoria')}}">
    </label>
     @error('categoria')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <button type="submit">Enviar Formulario</button>
    </form>
@endsection

@extends('layouts.plantilla')

@section('title','curso edit')

@section('content')


    <h1>en este curso editar</h1>

     <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf

        @method('put')
    <label for="">
    Nombre:
    <br>
    <input type="text" name="nombre" id="" value="{{old('nombre',$curso->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <br>
    <label for="">
    Descripcion:
    <br>
    <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
    
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <br>
    <label for="">
    Categoria:
    <br>
    <input type="text" name="categoria" id="" value="{{old('categoria',$curso->categoria)}}">
    </label>
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <br>
    <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
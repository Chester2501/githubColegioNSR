@extends('layouts.plantilla')

@section('title','curso'.$curso->nombre)

@section('content')

     
     <h1> Bienvenido al curso {{$curso->nombre}}  </h1>
     <a href="{{route('cursos.index')}}">Volver a Cursos</a>
     <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
     <p><strong>{{$curso->categoria}}</strong></p>
     <p>{{$curso->descripcion}}</p>

     <form action="{{route('cursos.destroy',$curso)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit">Eliminar</button>

          
     </form>
@endsection




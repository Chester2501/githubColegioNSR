@extends('..layouts.plantilla')

@section('title','curso')

@section('content')


  
   <a href="{{route('cursos.create')}}">Crear curso</a>
   <ul>
      @foreach($cursos as $curso)
      <li><a href="{{route('cursos.show',$curso)}}">{{$curso->nombre}}</a>
        
      </li>

      @endforeach
   </ul>
   {{$cursos->links()}}
@endsection
<!DOCTYPE html>

@extends('layouts.plantilla')

@section('title','Home')

@section('content')

<h1>Dejanos un mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label for="" >
        Nombre:
        <br>
        <input type="text" name="name" id="">
    </label>
    <br>
    @error('name')
        <p><strong>{{$message}}</strong> </p>
    @enderror
    <br>
    <label for="">
        Correo:
        <br>
        <input type="text" name="correo" id="">
    </label>
     <br>
    @error('correo')
        <p><strong>{{$message}}</strong> </p>
    @enderror
    <br>
    <label for="">
        Mensaje:
        <br>
        <textarea name="mensaje" id="" cols="30" rows="4"></textarea>
    </label>
     <br>
    @error('mensaje')
        <p><strong>{{$message}}</strong> </p>
    @enderror
    <br>
    <button type="submit">Enviar Mensaje</button>
</form>

@if (session('info'))
     <script>
         alert("{{session('info')}}");
     </script>
    
@endif
@endsection

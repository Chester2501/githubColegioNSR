@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Crear Nueva Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.categorias.store'])!!}

              <div class="form-group">
                  {!! Form::label('name','Nombre')!!}
                   {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Ingrese el nombre de la categoria'])!!}

                   @error('name')
                       <samp class="text-danger">
                           {{$message}}
                       </samp>
                   @enderror
              </div>

               {!! Form::submit('Crear Categoria',['class'=>'btn btn-primary'])!!}

            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
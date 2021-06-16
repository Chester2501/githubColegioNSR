@extends('adminlte::page')
@section('title', 'Colegio NSR')

@section('content_header')
    <h1>Crear nueva etiqueta</h1>
@stop

@section('content')
   <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.tags.store'])!!}

              <div class="form-group">
                  {!! Form::label('name','Nombre:')!!}
                   {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Ingrese el nombre de la Etiqueta'])!!}

                   @error('name')
                       <samp class="text-danger">
                           {{$message}}
                       </samp>
                   @enderror
              </div>

               {!! Form::submit('Crear Etiqueta',['class'=>'btn btn-primary'])!!}

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
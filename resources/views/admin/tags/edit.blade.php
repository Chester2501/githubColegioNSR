@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}} </strong>
        </div>
   
   @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag,['route'=> ['admin.tags.update',$tag],'method'=>'put'])!!}

              <div class="form-group">
                  {!! Form::label('name','Nombre')!!}
                   {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Ingrese el nombre de la Etiqueta'])!!}

                   @error('name')
                       <samp class="text-danger">
                           {{$message}}
                       </samp>
                   @enderror
              </div>

               {!! Form::submit('Actualizar Etiqueta',['class'=>'btn btn-primary'])!!}

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
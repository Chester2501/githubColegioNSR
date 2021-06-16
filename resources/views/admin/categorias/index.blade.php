@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Lista de Categoria</h1>
@stop

@section('content')

@if (session('info'))
     <div class="alert alert-success">
            <strong>{{session('info')}} </strong>
        </div>
@endif
   <div class="card">

        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.categorias.create')}}">Agregar Categoria</a>

        </div>
       <div class="card-body">
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th colspan="2"></th>
                   </tr>
               </thead>

               <tbody>

                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$categoria)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy',$categoria)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            
                            </form>
                        </td>
                    </tr>
                @endforeach

               </tbody>
             
           </table>
       </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

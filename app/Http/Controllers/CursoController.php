<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{
    public function index(){

        $cursos= Curso::orderBy('id','desc')->paginate();
       
     return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        
         $curso = Curso::created($request->all());

         return redirect('cursos.show',$curso);
    }

    public function show(Curso $curso){

       
       
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit',compact('curso'));

    }

      public function update(Request $request,Curso $curso)
      {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);
       

        $curso = Curso::updated($request->all());

        return redirect('cursos.show', $curso);
      }

      public function destroy(Curso $curso){
          $curso->delete();
          
        return redirect('cursos.index', $curso);
      }
}

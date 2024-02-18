<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::with('usuarios')->get();
        return view('cursos.listado', compact('cursos'));
    }

    public function create(){
        $usuarios = User::all();
        return view('cursos.crear', compact('usuarios'));
    }

    public function store(Request $request){
        $curso = Curso::create([
            'id_usuario' => $request->id_usuario,
            'id_jornada' => $request->id_jornada  ,
            'fecha_inicio' => $request->fecha_inicio ,
            'fecha_fin' => $request->fecha_fin ,
        ]);
        return 'ok';
    }

    public function edit($id){
        $curso = Curso::where('id', $id)->first();
        $curso->fecha_inicio = date('d-m-Y', strtotime($curso->fecha_inicio));
        $curso->fecha_fin = date('d-m-Y', strtotime($curso->fecha_fin));
        $usuarios = User::all();
         return view('cursos.editar', compact('curso', 'usuarios'));
    }
    public function update($id, Request $request){
        $curso = Curso::find($id);
        $curso->id_usuario = $request->id_usuario;
        $curso->id_jornada = $request->id_jornada;
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
    
        $curso->save();

        return redirect('cursos');
    }
}

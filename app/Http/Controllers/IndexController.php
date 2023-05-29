<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('index',['tarefas'=>$tarefas]);
    }

    public function salvar(Request $request)
    {   
        $keys = array_keys($request->all());
        $mensagem = $request->all()['mensagem'];
        foreach($keys as $dia){
            if($dia != 'mensagem' && $dia != '_token'){
                Tarefa::create([
                    'mensagem'=>$mensagem,
                    'dia'=> $dia
                ]);
            }
        }
        return redirect()->route('index');
    }

    public function deletar($id)
    {
        Tarefa::find($id)->delete();
        return redirect()->route('index');
    }
}

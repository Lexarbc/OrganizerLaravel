<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('index');
    }

    /** 
     * Vai até a página 'criar'
     */
    public function Mostrar_Criar(){
        return View('Criar');
    }

    public function Mostrar_Visualizar(){
        $Dados_trf = Tarefa::All();

        return View('Visualizar',['dadosTarefa'=> $Dados_trf]);
    }
    
    public function Mostrar_Atualizar(){
        $Dados_trf = Tarefa::All();

        return View('Atualizar',['dadosTarefa'=> $Dados_trf]);
    }

    public function Mostrar_Alterar(Tarefa $registroTarefa){
    
        return View('Alterar',['registroTarefa'=> $registroTarefa]);
    }

    public function Cadastrar_Tarefa(Request $request)
    {
        $Dados_trf = $request->validate([
            'nm_tarefa' => 'string|required',
            'conteudo_tarefa' => 'string|required',
            'cor' => 'string|required'
            
        ]);

        Tarefa::create($Dados_trf);

        return redirect::route('Criar');
    }


    public function Apagar(Tarefa $registroTarefa)
    {    
        $registroTarefa->delete();

        return Redirect::route('Atualizar');
    }

    public function AlterarTarefa(Tarefa $registroTarefa, Request $request){

        $Dados_trf = $request->validate([
            'nm_tarefa' => 'string|required',
            'conteudo_tarefa' => 'string|required',
            'cor' => 'string|required'
        ]);

        $tarefa = Tarefa::find($registroTarefa->id);
        $tarefa->update($Dados_trf);
        return redirect()->route('Atualizar');
    }

}

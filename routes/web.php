<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


//Rotas para a pagina Index.blade.php

Route::get('/',[TarefaController::class,'index'])->name('Index');

// Rotas dedicadas para a página Criar
Route::get('/Criar',[TarefaController::class,'Mostrar_Criar'])->name('Criar');
Route::post('/CreateRowTarefa',[TarefaController::class,'Cadastrar_Tarefa'])->name('Cadastro-tarefa');



//Rotas para a pagina visualizar.blade.php
Route::get('/Visualizar',[TarefaController::class,'Mostrar_Visualizar'])->name('Visualizar');

//Rotas para a pagina atualizar.blade.php
Route::get('/Atualizar',[TarefaController::class,'Mostrar_Atualizar'])->name('Atualizar');

//Rotas para a pagina alterar.blade.php
Route::get('/Alterar/{registroTarefa}',[TarefaController::class,'Mostrar_Alterar'])->name('Alterar');
Route::put('/Alterando-tarefa/{registroTarefa}',[TarefaController::class,'AlterarTarefa'])->name('Alterar-tarefa');


//Rotas para Apagar
Route::delete('/Apagar/{registroTarefa}',[TarefaController::class,'Apagar'])->name('Apagar');

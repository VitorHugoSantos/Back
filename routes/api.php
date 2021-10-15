<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('login')->group(function () {
    Route::post('/users', "UsersController@index");
});

Route::prefix('cadastro')->group(function () {
    //Agendamento
    Route::prefix('agendamento')->group(function () {
        Route::post('/salvar/cliente', "AgendamentoHorarioController@salvarCliente");
        Route::post('/busca/cliente', "AgendamentoHorarioController@buscaCliente");
        Route::post('/busca/acessorios', "AgendamentoHorarioController@buscaAcessorios");
        Route::post('/salvar', "AgendamentoHorarioController@salvar");
    });

    //Acessorios
    Route::prefix('acessorio')->group(function () {
        Route::post('/salvar', "AcessoriosController@salvar");
    });

    //Gastos
    Route::prefix('gastos')->group(function () {
        Route::post('/salvar', "GastosController@salvar");
    });

    //Gastos
    Route::prefix('recebimentos')->group(function () {
        Route::post('/salvar', "RecebimentosController@salvar");
    });

});

//Agenda
Route::prefix('agenda')->group(function () {
    Route::post('/busca/horarios', "AgendaController@buscaHorarios");
    Route::post('/altera/horario', "AgendaController@alteraHorario");
});


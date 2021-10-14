<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AgendamentoHorarioService;

class AgendamentoHorarioController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->service = new AgendamentoHorarioService;
    // } 

    public function salvarCliente(Request $request) {
        $retorno = new AgendamentoHorarioService();
        return $retorno->salvarCliente($request);
    } 

    public function buscaCliente() {
        $retorno = new AgendamentoHorarioService();
        return $retorno->buscaCliente();
    }

    public function buscaAcessorios() {
        $retorno = new AgendamentoHorarioService();
        return $retorno->buscaAcessorios();
    }

    public function salvar(Request $request) {
        $retorno = new AgendamentoHorarioService();
        return $retorno->salvar($request);
    } 
}

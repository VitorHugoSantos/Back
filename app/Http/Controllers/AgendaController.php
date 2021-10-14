<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AgendaService;

class AgendaController extends Controller{ 

    public function buscaHorarios() {
        $retorno = new AgendaService();
        return $retorno->buscaHorarios();
    } 

    public function alteraHorario(Request $request){
        $retorno = new AgendaService();
        return $retorno->alteraHorario($request);
    }
}

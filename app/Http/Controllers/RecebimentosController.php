<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RecebimentosService;

class RecebimentosController extends Controller{ 

    public function salvar(Request $request){
        $retorno = new RecebimentosService();
        return $retorno->salvar($request);
    } 
}

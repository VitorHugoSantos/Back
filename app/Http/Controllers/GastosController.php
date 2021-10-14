<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\GastosService;

class GastosController extends Controller{ 

    public function salvar(Request $request){
        $retorno = new GastosService();
        return $retorno->salvar($request);
    } 
}

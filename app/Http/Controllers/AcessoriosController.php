<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AcessoriosService;

class AcessoriosController extends Controller{

    public function salvar(Request $request) {
        $retorno = new AcessoriosService();
        return $retorno->salvarCliente($request);
    }
}

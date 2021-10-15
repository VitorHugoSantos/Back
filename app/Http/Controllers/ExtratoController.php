<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ExtratoService;

class ExtratoController extends Controller{

    public function gerarRelatorio(Request $request) {
        $retorno = new ExtratoService();
        return $retorno->gerarRelatorio($request);
    }
}

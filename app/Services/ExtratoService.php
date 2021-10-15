<?php

namespace App\Services;

use App\Models\Hairstyle;

class ExtratoService{

    public function gerarRelatorio($request){
        dd('oi');
        // $horarios = Hairstyle::selectRaw('haicodigo as id, cliname as title, haidaytime as startDate')
        //                     ->leftJoin('client', 'haicliente', 'clicodigo')
        //                 ->get();
        // return Response(['status' => true, 'dados' => $horarios], 200);
    }
}
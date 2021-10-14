<?php

namespace App\Services;

use App\Models\Payment;

class GastosService{

    public function salvar($request){
        $gastos = new Payment;
        $gastos->payamont     = $request->payamont;
        $gastos->paycategory = $request->paycategory;
        $gastos->payway      = $request->payway;
        $gastos->paydescr    = $request->paydescr;
        $gastos->paydate     = $request->paydate;
        $gastos->save();
        dd($gastos);
    }
}
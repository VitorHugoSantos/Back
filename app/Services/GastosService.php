<?php

namespace App\Services;

use App\Models\Payment;

class GastosService{

    public function salvar($request){
        try{
            $gastos = new Payment;
            $gastos->payamont    = $request->payamont;
            $gastos->paycategory = $request->paycategory;
            $gastos->payway      = $request->payway;
            $gastos->paydescr    = $request->paydescr;
            $gastos->paydate     = $request->paydate;
            $gastos->save();
            return Response(['status' => true, 'dados' => $gastos], 201);
        } catch (\Exception $e) {
            return Response(['status' => false, 'error' => $e], 200);
        }
    }
}
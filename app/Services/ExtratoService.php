<?php

namespace App\Services;

use App\Models\Receivement;
use App\Models\Payment;

class ExtratoService{

    public function gerarRelatorio($request){
        $data1 = $request->data[0];
        $data2 = $request->data[1];
        $entrada = Receivement::select('reccodigo', 'recamount', 'rececategory', 'recway', 'recdate')
                                ->whereBetween('recdate', [$data1, $data2])
                                ->orderBy('recdate')
                                ->get();
        $saida = Payment::selectRaw('paycodigo, payamont as valor, paycategory, payway,
                                     paydescr as descricao, paydate')
                        ->whereBetween('paydate', [$data1, $data2])
                        ->orderBy('paydate')
                        ->get();
        $saldo = 0;
        for ($i=0; $i < count($entrada); $i++) { 
            $saldo = $entrada[$i]['recamount'] + $saldo;
        }

        for ($i=0; $i < count($saida); $i++) { 
            $saldo = $saldo - $saida[$i]['valor'];
        }

        $objt['entrada'] = $entrada;
        $objt['saida'] = $saida;
        $objt['saldo'] = $saldo;

        return Response(['status' => true, 'dados' => $objt], 200);
    }
}
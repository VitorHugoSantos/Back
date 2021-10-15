<?php

namespace App\Services;

use App\Models\Receivement;

class RecebimentosService{

    public function salvar($request){
        try{
            $recebimentos = new Receivement;
            $recebimentos->recamount   = $request->recamount;
            $recebimentos->rececategory = $request->reccategory;
            $recebimentos->recway      = $request->recway;
            $recebimentos->recdate     = $request->recdate;
            $recebimentos->save();
            return response(['status' => true, 'dados' => $recebimentos], 201);
        } catch (\Exception $e) {
            return response(['status' => false, 'error' => $e], 200);
        }
    }
}
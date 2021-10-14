<?php

namespace App\Services;

use App\Models\Accessories;

class AcessoriosService{

    public function salvarCliente($request){
        try{
            $salva = new Accessories;
            $salva->acctype = $request->acctype;
            $salva->accdescr = $request->accdescr;
            $salva->save();
            return Response(['status' => true], 201);
        } catch(ErrorException $e){
            return Response(['status' => false], 500);
        }
    }
}
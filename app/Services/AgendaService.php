<?php

namespace App\Services;

use App\Models\Hairstyle;

class AgendaService{

    public function buscaHorarios(){
        $horarios = Hairstyle::selectRaw('haicodigo as id, cliname as title, haidaytime as startDate')
                            ->leftJoin('client', 'haicliente', 'clicodigo')
                        ->get();
        return Response(['status' => true, 'dados' => $horarios], 200);
    }

    public function alteraHorario($request){
        try{
            $id            = $request['dado']['id'];
            $newHaidaytime = $request['dado']['startdate'];
            $alteraHorario = Hairstyle::find($id);
            $alteraHorario->haidaytime = $newHaidaytime;
            $alteraHorario->save();
            return Response(['status' => true, 'dados' => $alteraHorario], 201);
        } catch (\Exception $e) {
            return Response(['status' => false, 'error' => $e], 200);
        }
    }
}
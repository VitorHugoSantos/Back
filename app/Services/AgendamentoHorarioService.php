<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Accessories;
use App\Models\Hairstyle;
use \Datetime;

class AgendamentoHorarioService{

    public function buscaCliente(){
        $cliente = Client::selectRaw('clicodigo as value, cliname as name')
                        ->get();
        return Response(['status' => true, 'dados' => $cliente], 200);
    }

    public function buscaAcessorios(){
        $cliente = Accessories::selectRaw('acccodigo as value, acctype as name')
                        ->get();
        return Response(['status' => true, 'dados' => $cliente], 200);
    }

    public function salvarCliente($request){
        try{
            $salva = new Client;
            $salva->cliname = $request->cliname;
            $salva->cliphone = $request->cliphone;
            $salva->save();
            return Response(['status' => true, 'dados' => $salva], 201);
        } catch (\Exception $e) {
            return Response(['status' => false, 'error' => $e], 200);
        }
    }

    public function salvar($request){
        try{
            $dataHoraPenteado = $request->dataPenteado.' '.$request->horaPenteado;
            $dataHoraAgendadas = Hairstyle::select('haidaytime')
                                            ->where('haidaytime', $dataHoraPenteado)
                                            ->first();
            if(isset($dataHoraAgendadas)){
                return Response(['status' => true, 
                'message' => 'Já existe um agendamento para esta data e horário'], 202);
            }

            // $dataHoraAgendadas = Hairstyle::select('haidaytime')
            //                                 ->where('haidaytime', '<', $dataHoraPenteado)
            //                                 ->first();
            // $data = DateTime::createFromFormat("d/m/Y H:i", $dataHoraPenteado);
            // dd($data);
            // $dataHoraTestePenteado = $request->dataTeste.' '.$request->horaTeste;
            $salva = new Hairstyle;
            $salva->haicliente = $request->haicliente;
            $salva->haisize = $request->haisize;
            $salva->haitype = $request->haitype;
            $salva->haieventtime = $request->haieventtime;
            $salva->haidistime = $request->haidistime;
            $salva->haiexetime = $request->haiexetime;
            $salva->haidaytime = $dataHoraPenteado;
            $salva->haistatus = $request->haistatus;
            $salva->haicancelDesc = $request->haicancelDesc;
            $salva->haitest = $request->haitest;
            // $salva->haitestdaytime = $request->haitestdaytime;
            $salva->save();
            return Response(['status' => true], 201);
        } catch (\Exception $e) {
            return Response(['status' => false], 200);
        }
    }
}
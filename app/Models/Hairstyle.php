<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairstyle extends Model{

    // Nome da tabela existente
    protected $table = 'hairstyle';
    protected $primaryKey = 'haicodigo'; 
    protected $fillable = [
        'haicodigo',
        'haicliente',
        'haisize',
        'haitype',
        'haieventtime',
        'haidistime',
        'haiexetime',
        'haidaytime',
        'haistatus',
        'haicancelDesc',
        'haitest',
        'haitestdaytime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model{

    // Nome da tabela existente
    protected $table = 'client';
    protected $primaryKey = 'clicodigo'; 
    protected $fillable = [
        'clicodigo',
        'cliname',
        'cliphone',
    ];
}

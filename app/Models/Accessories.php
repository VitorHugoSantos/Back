<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessories extends Model{

    // Nome da tabela existente
    protected $table = 'accessories';
    protected $primaryKey = 'acccodigo'; 
    protected $fillable = [
        'acccodigo',
        'acctype',
        'accdescr',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receivement extends Model{

    // Nome da tabela existente
    protected $table = 'receivement';
    protected $primaryKey = 'reccodigo'; 
    protected $fillable = [
        'reccodigo',
        'recamount',
        'rececategory',
        'recway',
        'recdate',
    ];
}

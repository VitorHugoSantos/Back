<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model{

    // Nome da tabela existente
    protected $table = 'payment';
    protected $primaryKey = 'paycodigo'; 
    protected $fillable = [
        'paycodigo',
        'payamont',
        'paycategory',
        'payway',
        'paydesc',
        'paydate',
    ];
}

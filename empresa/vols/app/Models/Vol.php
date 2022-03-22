<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'codi_unic_vol',
        'model_avio',
        'ciutat_origen',
        'ciutat_desti',
        'terminal_origen',
        'terminal_desti',
        'data_sortida',
        'data_arribada',
        'hora_sortida',
        'hora_arribada',
        'Classe'
    ];
}

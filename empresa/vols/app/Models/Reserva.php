<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $timestamps = false;
    public $primaryKey = "codi_unic_vol";
    public $incrementing = false;

    use HasFactory;
    protected $fillable = [
        'passaport_client',
        'codi_unic_vol',
        'localitzador',
        'numero_seient',
        'equipatge_ma',
        'equipatge_cabina',
        'quantitat_equipatges_20',
        'tipus_asseguranca',
        'preu_vol',
        'tipus_checking'
    ];
}

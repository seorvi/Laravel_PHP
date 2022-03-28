<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public $timestamps = false;
    public $primaryKey = "passaport_client";
    public $incrementing = false;

    use HasFactory;
    protected $fillable = [
        'passaport_client',
        'nom_client',
        'edat_client',
        'telefon_client',
        'adreca_client',
        'ciutat_client',
        'pais_client',
        'email_client',
        'tipus_targeta',
        'numero_targeta'
    ];
}

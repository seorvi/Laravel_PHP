<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    public $timestamps = false;
    public $primaryKey = "email_usuari";
    public $incrementing = false;

    use HasFactory;
    protected $fillable = [
        'nom_cognoms',
        'email_usuari',
        'contrasenya_usuari',
        'tipus',
        'darrere_hora_entrada',
        'darrere_hora_sortida'
    ];
}

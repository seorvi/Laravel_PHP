<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuaris extends Authenticatable
{
    public $timestamps = false;
    public $primaryKey = "email_usuari";
    public $incrementing = false;

    use HasFactory;
    protected $fillable = [
        'nom_cognoms',
        'email_usuari',
        'password',
        'tipus',
        'darrere_hora_entrada',
        'darrere_hora_sortida'
    ];
}

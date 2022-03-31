<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('usuaris')->insert([
            'nom_cognoms' => 'Costal',
            'email_usuari' => 'Costal@gmail.com',
            'password' => Hash::make('Costal'),
            'tipus' => 'treballador',
            'darrere_hora_entrada' => '08:00:00',
            'darrere_hora_sortida' => '17:00:00',
        ]);
    }
}

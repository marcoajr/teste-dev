<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
            [ 
                'numero' => '532',
                'telefone' => '219999-9999',
                'endereco' => 'Rua teste',
                'complemento' => 'Em Frente ao posto',
                'cep' => '249000',
                'estado' => 'Rio de Janeiro',
                'user_cont_id' => 1,
                'created_at' => now(),
                'updated_at' => now()

            ]
        ]);
    }
}

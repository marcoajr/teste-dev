<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_contatos')->insert([
            [
                'name' => 'Roberto Junior',
                'email' => 'roberto@gmail.com',
                'data_nascimento' => Carbon::createFromFormat('Y-m-d','1990-05-15'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jean Ballesteros",
            'email' => "balles970412@gmail.com",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistente@gmail.com",
            'password' => Hash::make('bola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "diseño@gmail.com",
            'password' => Hash::make('cola1234'),
        ]);
    }
}

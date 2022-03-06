<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        /* DB::table('users')->insert([
            'name' => "Jean Ballesteros",
            'email' => "balles970412@gmail.com",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistente@gmail.com",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "dise@gmail.com",
            'password' => Hash::make('hola1234'),
        ]); */

        $u = new User();
        $u->name = "Jean Ballesteros";
        $u->email = "balles970412@gmail.com";
        $u->password = Hash::make('hola1234');
        $u->save();


        $u = new User();
        $u->name = "Miguel Pandronio";
        $u->email = "miguel@gmail.com";
        $u->password = Hash::make('hola1234');
        $u->save();


        $u = new User();
        $u->name = "Bizarrap Gutierrez";
        $u->email = "biza@gmail.com";
        $u->password = Hash::make('hola1234');
        $u->save();
    }
}

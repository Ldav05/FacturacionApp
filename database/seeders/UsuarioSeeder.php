<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            //'id',
            'nombre' => 'Luis',
            'email' => 'Luis@gmail.com',
            //'email_verified_at',
            'pasword' => '1234',
            'cargo' => 'Gerente',
            'rolid'=>'1',
            'cedula' => '102444',
        ]);
        DB::table('usuario')->insert([
            //'id',
            'nombre' => 'Andres',
            'email' => 'Andres@gmail.com',
            //'email_verified_at',
            'pasword' => '1234',
            'cargo' => 'Asistente',
            'rolid'=>'2',
            'cedula' => '102444',
        ]);
        DB::table('usuario')->insert([
            //'id',
            'nombre' => 'Andrea',
            'email' => 'Andrea@gmail.com',
            //'email_verified_at',
            'pasword' => '1234',
            'cargo' => 'Vendedor',
            'rolid'=>'3',
            'cedula' => '102444',
        ]);
        /*User::create([
            'id' => '',
            'nombre' => 'Luis',
            'email' => 'Luis@gmail.com',
            'email_verified_at'=>'',
            'pasword' => '1234',
            'cargo' => 'Gerente',
            'rolid'=>'',
            'cedula' => '102444',
        ]);*/
}
}
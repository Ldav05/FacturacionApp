<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert([
            'nombre' => 'Sergio',
            'email' => 'sergio@gmail.com',
            'telefono'=>'301865680',
            'apellido'=>'Hernandez',
        ]);
        DB::table('cliente')->insert([
            'nombre' => 'Saul',
            'email' => 'Saul@gmail.com',
            'telefono'=>'301865680',
            'apellido'=>'Perez',
        ]);
        DB::table('cliente')->insert([
            'nombre' => 'Simon',
            'email' => 'Simon@gmail.com',
            'telefono'=>'301865680',
            'apellido'=>'Bobadilla',
        ]);
    }
}

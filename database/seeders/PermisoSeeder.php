<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_permiso')->insert([
            'nombre' => 'Pico',
            'Descripcion' => 'Persona'
        ]);
        DB::table('_permiso')->insert([
            'nombre' => 'Gordon',
            'Descripcion' => 'Persona'
        ]);
        DB::table('_permiso')->insert([
            'nombre' => 'Negro',
            'Descripcion' => 'Persona'
        ]);
    }
}

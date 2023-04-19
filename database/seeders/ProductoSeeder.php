<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'precio' => '2400',
            'nombre' => 'Papas',
            'Disponibilidad' => '1',
        ]);
        DB::table('producto')->insert([
            'precio' => '3000',
            'nombre' => 'MataRatas',
            'Disponibilidad' => '0',
        ]);
        DB::table('producto')->insert([
            'precio' => '2800',
            'nombre' => 'Pinguino',
            'Disponibilidad' => '1',
        ]);
    }
}

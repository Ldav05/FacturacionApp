<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => 'Pico'
        ]);
        DB::table('rol')->insert([
            'nombre' => 'Gordon'
        ]);
        DB::table('rol')->insert([
            'nombre' => 'Pico'
        ]);
    }
}

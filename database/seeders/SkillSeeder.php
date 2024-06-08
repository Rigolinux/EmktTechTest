<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->truncate();

        // Insertar los valores especificados
        $habilidades = [
            ['name' => 'php'],
            ['name' => 'html'],
            ['name' => 'css'],
            ['name' => 'laravel'],
            ['name' => 'java'],
            ['name' => 'js'],
            ['name' => 'angular'],
            ['name' => 'node'],
            ['name' => 'Linux'],
            ['name' => 'servidores'],
        ];

        DB::table('skills')->insert($habilidades);
    }
}

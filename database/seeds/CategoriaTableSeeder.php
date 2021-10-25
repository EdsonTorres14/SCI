<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre' => 'Electrónica'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Línea Blanca'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Deportes'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Alimentos'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Jardines'
        ]);
    }
}

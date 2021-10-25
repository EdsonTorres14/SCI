<?php

use Illuminate\Database\Seeder;

class SucursalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sucursal')->insert([
            'nombre' => 'Cuernavaca',
            'estado_idEstado' => 18
        ]);
        DB::table('sucursal')->insert([
            'nombre' => 'Yautepec',
            'estado_idEstado' => 18
        ]);
        DB::table('sucursal')->insert([
            'nombre' => 'Cuautla',
            'estado_idEstado' => 18
        ]);
        DB::table('sucursal')->insert([
            'nombre' => 'Acapulco',
            'estado_idEstado' => 13
        ]);
    }
}

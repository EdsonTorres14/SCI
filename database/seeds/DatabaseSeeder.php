<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadoTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(SucursalTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
    }
}

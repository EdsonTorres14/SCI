<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Edson',
            'tipo_usuario' => 'Administrador',
            'email' => 'edson@gmail.com',
            //clave secret
            'password' => '$2y$10$QGk0arppWE2daqYn4vTUQuXOdOHftzDcKmTl96X4PN.OkOOYlfC0i',
            'status' => 'Activo',
        ]);

        DB::table('users')->insert([
            'name' => 'David',
            'tipo_usuario' => 'Capturista',
            'email' => 'david@gmail.com',
            //clave secret
            'password' => '$2y$10$QGk0arppWE2daqYn4vTUQuXOdOHftzDcKmTl96X4PN.OkOOYlfC0i',
            'status' => 'Activo',
        ]);

        DB::table('users')->insert([
            'name' => 'Pilar',
            'tipo_usuario' => 'Gestor',
            'email' => 'pilar@gmail.com',
            //clave secret
            'password' => '$2y$10$QGk0arppWE2daqYn4vTUQuXOdOHftzDcKmTl96X4PN.OkOOYlfC0i',
            'status' => 'Activo',
        ]);

        DB::table('rols')->insert([
            'name' => 'Administrador'
        ]);

        DB::table('rols')->insert([
            'name' => 'Capturista'
        ]);
        DB::table('rols')->insert([
            'name' => 'Gestor'
        ]);

        DB::table('rol_user')->insert([
            'rol_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('rol_user')->insert([
            'rol_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('rol_user')->insert([
            'rol_id' => 3,
            'user_id' => 3,
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Edson',
            'primerApellido' => 'Torres',
            'segundoApellido' => 'Rios',
            'usuario_id' => 1,
            'status' => 'Activo'
        ]);

        DB::table('usuario')->insert([
            'nombre' => '   David',
            'primerApellido' => 'Torres',
            'segundoApellido' => 'Rios',
            'usuario_id' => 2,
            'status' => 'Activo'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Pilar',
            'primerApellido' => 'Enriquez',
            'segundoApellido' => 'Uriostegui',
            'usuario_id' => 3,
            'status' => 'Activo'
        ]);

    }
}

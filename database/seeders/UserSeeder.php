<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@ngm.com.br',
            'password' => bcrypt('123456'),
            'perfil' => 0
        ]);

        // User::create([
        //     'name' => 'Marcelo Gome',
        //     'email' => 'marcelo.gomes@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);


        // User::create([
        //     'name' => 'Charles Silva',
        //     'email' => 'charles.silva@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);



        // User::create([
        //     'name' => 'Marcos Aguilar',
        //     'email' => 'marcos.aguilar@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);



        // User::create([
        //     'name' => 'Geovanna Cecilia',
        //     'email' => 'geovanna.cecilia@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);



        // User::create([
        //     'name' => 'Alexandre Fortes',
        //     'email' => 'alexandre.fortes@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);



        // User::create([
        //     'name' => 'Leopoldo Ciríaco',
        //     'email' => 'leopoldo.ciriaco@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);


        // User::create([
        //     'name' => 'Camila Poltieire',
        //     'email' => 'camila.poltieire@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);


        // User::create([
        //     'name' => 'Pollyanna Costa',
        //     'email' => 'pollyanna.costa@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);


        // User::create([
        //     'name' => 'Aurelio Arouca',
        //     'email' => 'aurelio.arouca@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);



        // User::create([
        //     'name' => 'Marcos Colnaghi',
        //     'email' => 'marcos.colnaghi@itone.com.br',
        //     'password' => bcrypt('123456'),
        //     'perfil' => 0
        // ]);
    }
}

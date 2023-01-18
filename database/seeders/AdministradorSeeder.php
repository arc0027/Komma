<?php

namespace Database\Seeders;

use App\Models\Administrador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Administrador();
        $user -> name = 'Alvaro Rodriguez Chofles';
        $user -> email = 'arc@alu.medac.es';
        $user -> password = '$2y$10$7SUMtumyOrKv3cq3EeYUKeSyouGN4lb0vx.nOR3u71oYARX8OQCqW'; // Medac12345
        $user -> save();   
    }
}

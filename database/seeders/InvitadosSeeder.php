<?php

namespace Database\Seeders;

use App\Models\Invitados;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Invitados();
        $user -> name = 'Alvaro Rodriguez Chofles';
        $user -> email = 'arc@alu.medac.es';
        $user -> phone = '678987656'; 
        $user -> save();   
    }
}

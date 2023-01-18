<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> name = 'Alvaro Rodriguez Chofles';
        $user -> email = 'arc@alu.medac.es';
        $user -> email_verified_at = now();
        $user -> password = '$2y$10$7SUMtumyOrKv3cq3EeYUKeSyouGN4lb0vx.nOR3u71oYARX8OQCqW'; // Medac12345
        $user -> phone = '670585789';
        $user -> save();   

        User::factory(49)->create(); 
    }
}

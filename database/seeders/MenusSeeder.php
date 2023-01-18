<?php

namespace Database\Seeders;

use App\Models\Menus;
use Illuminate\Database\Seeder;
use Database\Factories\MenusFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Menus();
        $user -> name = 'Pulpo de roca con miel de membrillo de Atrapallada';
        $user -> price = '15,90';
        $user -> save();

        $user = new Menus();
        $user -> name = 'Gazpacho de frutas';
        $user -> price = '10,50';
        $user -> save();   

        $user = new Menus();
        $user -> name = 'Gambas marinadas';
        $user -> price = '12,80';
        $user -> save(); 

        $user = new Menus();
        $user -> name = 'Steak tartar';
        $user -> price = '16,30';
        $user -> save();     

        $user = new Menus();
        $user -> name = 'Arroz de costilla de cerdo y ali oli de tomillo';
        $user -> price = '18,30';
        $user -> save();     
    }
}

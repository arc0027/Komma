<?php

namespace Database\Seeders;

use App\Models\Horarios;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Horarios();
        $user -> fecha = '2023-01-20';
        $user -> hora = '14:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-20';
        $user -> hora = '14:30';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-20';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-20';
        $user -> hora = '21:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-22';
        $user -> hora = '14:30';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-25';
        $user -> hora = '15:45';
        $user -> estados = 'Disponible';
        $user -> save();  

        $user = new Horarios();
        $user -> fecha = '2023-01-26';
        $user -> hora = '15:30';
        $user -> estados = 'Disponible';
        $user -> save();
        
        $user = new Horarios();
        $user -> fecha = '2023-01-27';
        $user -> hora = '14:00';
        $user -> estados = 'Disponible';
        $user -> save();  

        $user = new Horarios();
        $user -> fecha = '2023-01-29';
        $user -> hora = '22:00';
        $user -> estados = 'Disponible';
        $user -> save(); 
        
        $user = new Horarios();
        $user -> fecha = '2023-01-30';
        $user -> hora = '21:45';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-31';
        $user -> hora = '20:45';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-05';
        $user -> hora = '15:25';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-03';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-16';
        $user -> hora = '14:25';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-27';
        $user -> hora = '21:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-15';
        $user -> hora = '14:45';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-16';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-20';
        $user -> hora = '14:30';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-24';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-02-27';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-25';
        $user -> hora = '22:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-23';
        $user -> hora = '15:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-24';
        $user -> hora = '16:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-30';
        $user -> hora = '22:00';
        $user -> estados = 'Disponible';
        $user -> save();

        $user = new Horarios();
        $user -> fecha = '2023-01-31';
        $user -> hora = '21:00';
        $user -> estados = 'Disponible';
        $user -> save();
    }
}

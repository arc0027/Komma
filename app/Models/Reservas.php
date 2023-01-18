<?php

namespace App\Models;

use App\Models\User;
use App\Models\Menus;
use App\Models\Horarios;
use App\Models\Invitados;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $primaryKey = 'id_reservas';

    protected $fillable = [
        "numero_tarjetas",
        "numero_personas",
    ];

    public function users()
    {
        return $this->belongsTo(User::class,  'id_users', 'id');
    }
    public function guest()
    {
        return $this->belongsTo(Invitados::class,  'fechas_invitados', 'id');
    }
    public function horarios()
    {
        return $this->belongsTo(Horarios::class, 'fecha_reservas', 'id');
    }
    public function menus()
    {
        return $this->belongsTo(Menus::class, 'id_menus', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarjetas extends Model
{
    use HasFactory;

    protected $table =  'tarjetas';

    protected $primaryKey = 'numero_tarjetas';

    protected $fillable = [
        "id_users",
        "fecha_vencimiento",
        "cvv",
    ];

    public function users(){
        return $this->belongsTo(User::class,'id');
    }
}

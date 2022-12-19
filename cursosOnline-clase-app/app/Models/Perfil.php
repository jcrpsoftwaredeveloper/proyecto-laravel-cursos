<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido1',
        'apellido2',
        'observaciones',
        'direccion',
        'telefono',
        'user_id'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

}

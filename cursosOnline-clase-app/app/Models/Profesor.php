<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'sueldo_hora',
        'user_id'
    ];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}

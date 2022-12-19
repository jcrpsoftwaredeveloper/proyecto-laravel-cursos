<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno_curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function cursos() {
        return $this->belongsToMany(Curso::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }

}

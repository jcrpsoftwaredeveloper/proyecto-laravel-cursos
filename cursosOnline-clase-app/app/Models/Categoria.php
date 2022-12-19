<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'titulo',
        'descripcion',
        'imagen'
    ];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }

}

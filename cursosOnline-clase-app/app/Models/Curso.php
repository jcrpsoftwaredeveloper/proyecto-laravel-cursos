<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'titulo',
        'descripcion',
        'precio',
        'duracion',
        'horario',
        'imagen',
        'categoria_id',
        'profesor_id'
    ];

    public function profesor() {
        return $this->belongsTo(Profesor::class);
    }
    public function alumnos() {
        return $this->belongsToMany(Alumno_curso::class);
    }
    public function categorias() {
        return $this->belongsTo(Categoria::class);
    }

}

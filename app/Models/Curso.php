<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = [
        'id_usuario',
        'id_jornada',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function usuarios(){
        return $this->belongsTo(User::class, 'id_usuario');
    }
}

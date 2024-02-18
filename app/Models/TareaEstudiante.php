<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaEstudiante extends Model
{
    use HasFactory;
    protected $table = 'tarea_estudiantes';
    protected $fillable = [
        'estudiante_id',
        'tarea_id'
    ];
    
}

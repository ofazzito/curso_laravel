<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['titulo','descripcion','prioridad_id','tags'];

    
}

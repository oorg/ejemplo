<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
      protected $fillable = ['user_id', 'materia', 'crn', 'hora_inicio'];
}

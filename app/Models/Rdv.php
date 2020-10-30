<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor');
    }
    public function patients()
    {
        return $this->hasMany('App\Models\Patient');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function specialite()
    {
        return $this->belongsTo('App\Models\Specialite');
    }
    public function rdvs()
    {
        return $this->belongsToMany('App\Models\Rdv');
    }
}

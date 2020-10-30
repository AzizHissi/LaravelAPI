<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    //protected $fillable = ['NomPatient', 'telPatient', 'AdressePatient', 'dob'];
    public function rdvs()
    {

        return $this->belongsToMany('App\Models\Rdv');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    public function semestres()
    {
        return $this->hasMany(semestre::class);
    }
    public function matieres()
    {
        return $this->hasMany(matiere::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $hidden = [
        'created_at', 'updated_at',
        ];

    protected $fillable = ['ville_id', 'nom', 'prenom','adresse','telephone','email','dateNaissance'];

}

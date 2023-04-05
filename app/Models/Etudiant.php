<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $primaryKey = 'user_id';

    protected $hidden = [
        'created_at', 'updated_at',
        ];

    protected $fillable = ['user_id','ville_id', 'nom', 'prenom','adresse','telephone','dateNaissance'];


    public function getUser()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function getVille()
    {
    return $this->belongsTo(Ville::class, 'ville_id');
    }
}

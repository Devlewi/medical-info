<?php

// app/Models/Administrateur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Personne
{
    protected $fillable = ['personne_id'];

    public function personne()
    {
        return $this->belongsTo(Personne::class); // Relation avec le modèle Personne
    }
}

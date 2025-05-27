<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etudiant extends Model
{

    // protected $table='students';
    /**
     * The matieres that belong to the Etudiant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function matieres(): BelongsToMany
    {
        return $this->belongsToMany(Matiere::class, 'examen', 'etudiant_id', 'matiere_id');
    }


}

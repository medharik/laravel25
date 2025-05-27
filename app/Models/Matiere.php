<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matiere extends Model
{
    protected $fillable = ['nom','coef','professeur_id'];

    /**
     * Get the professeur that owns the Matiere
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function professeur(): BelongsTo
    {
        return $this->belongsTo(Professeur::class);
    }

    /**
     * The etudiants that belong to the Matiere
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function etudiants(): BelongsToMany
    {
        return $this->belongsToMany(Etudiant::class, 'examen', 'matiere_id', 'etudiant_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professeur extends Model
{
    protected $fillable = ['nom','prenom'];


/**
 * Get all of the matieres for the Professeur
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function matieres(): HasMany
{
    return $this->hasMany(Matiere::class);
}
}

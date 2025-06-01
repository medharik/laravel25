<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    protected $fillable = ['libelle','prix','qte','photo'];

/**
 * The factures that belong to the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function factures(): BelongsToMany
{
    return $this->belongsToMany(Facture::class)
    ->withPivot('quantite')
    ->withTimestamps();
    ;
}
}

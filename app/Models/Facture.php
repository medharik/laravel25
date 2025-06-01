<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Facture extends Model
{
    protected $fillable=['date_facture','client_id'];
    /**
     * Get the client that owns the Facture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    /**
     * The produits that belong to the Facture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produits(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class, 'facture_produit', 'facture_id', 'produit_id')
        ->withPivot('quantite')
        ->withTimestamps();
        ;
    }
}

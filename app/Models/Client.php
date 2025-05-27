<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = ['nom','prenom'];
    /**
     * Get all of the factures for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factures(): HasMany
    {
        return $this->hasMany(Facture::class);
    }

}

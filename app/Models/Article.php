<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // les donnees qu'on va saisir :
    protected $fillable = ['libelle','prix'];

}

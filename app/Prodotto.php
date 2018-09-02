<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodotto extends Model
{
    //

    protected $fillable = ['nome', 'marca', 'descrizione', 'categoria', 'prezzo'];
}

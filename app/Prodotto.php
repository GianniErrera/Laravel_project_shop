<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodotto extends Model
{
    //

    protected $fillable = ['nome', 'marca', 'descrizione', 'categoria_id', 'immagine', 'prezzo'];

     public function categoria() {

        return $this->belongsTo(Categoria::class);
    }

    public function immagine() {

    	return $this->hasMany(Immagine::class);


    }

    

}

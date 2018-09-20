<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immagine extends Model
{
    //
	protected $fillable = ['prodotto_id', 'immagine', 'descrizione', 'peso'];

	public function prodotto() {

		return $this->belongsTo(Prodotto::class);


	}





}

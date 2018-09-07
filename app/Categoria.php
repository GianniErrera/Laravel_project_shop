<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
protected $fillable = ['nome'];

	public function prodotto() {

        return $this->hasMany(Prodotto::class);
    }



    static function categorie() {

		 return static::has('prodotto')->get();



	}


}

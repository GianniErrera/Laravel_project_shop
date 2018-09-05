<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categoria;
use App\Prodotto;

class CategoriaController extends Controller
{
    //
	public function articolo() {

        return $this->hasMany(App\Articolo::class);
    }


    public function create() {

    		if ((Auth::user()->isAdmin) == 1) {


                return view('nuova_categoria');

            }


        $prodotti = Prodotto::all();
        return view('home', compact('prodotti'));
    }


    public function store() {

    		if ((Auth::user()->isAdmin) == 1) {

    			$categoria = new Categoria();
    			$categoria->nome = request('nome');
    			$categoria->save();
    			return redirect('/categoria/nuova');


            }
         


        $prodotti = Prodotto::all();
        return view('home', compact('prodotti'));
    }


}

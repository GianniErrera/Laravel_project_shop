<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodotto;
use App\Immagine;

class ImmagineController extends Controller
{
    //


    public function create($id) {

    	return view('immagini.galleria', compact('id'));
    }

    public function store($id) {

    	$this->validate(request(),['immagine' => 'required|image|max:1999']);

    	$id_prodotto = $id;
    	$peso = request('immagine')->getClientSize();
    	
    	$nome_immagine = basename(request('immagine')->getClientOriginalName(), ".".request('immagine')->getClientOriginalExtension());
    
    	$estensione = request('immagine')->getClientOriginalExtension();
    	$immagine_filename = $nome_immagine.'_'.time().'.'.$estensione;
    	$percorso = request('immagine')->storeAs('public/'.$id_prodotto, $immagine_filename);
    	session()->flash('message', 'Immagine caricata con successo');

    	$immagine = new Immagine();
    	$immagine->prodotto_id = $id_prodotto;
    	$immagine->peso = $peso;
    	$immagine->descrizione = request('descrizione');
    	$immagine->immagine = $immagine_filename;
    	$immagine->save();
    	return redirect()->back();






    }


}

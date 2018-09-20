<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categoria;
use App\Prodotto;

class CategoriaController extends Controller
{
    //
	


    public function create() {

    		if ((Auth::user()->isAdmin) == 1) {


                return view('nuova_categoria');

            }


        $prodotti = Prodotto::all();
        return view('home', compact('prodotti'));
    }


    public function store() {

    		if ((Auth::user()->isAdmin) != 1) {

    			return redirect('home');
    			// $prodotti = Prodotto::all();
       //  return view('home', compact('prodotti'));

    		 }


    			$categoria = new Categoria();
    			$categoria->nome = request('nome');
    			$categoria->save();
    			return redirect('/prodotti/inserisci');
        
    }


    public function show($id) {

    		$prodotti = Categoria::find($id)->prodotto;
    		return view('categoria', compact('prodotti'));
        
    }

    public function immagine ($id) {
        
       return view('immagini/copertina', compact('id'));

    }

    public function copertina($id) {

        $this->validate(request(),['copertina' => 'required|image|max:1999']);

         $full_file_name = request('copertina')->getClientOriginalName();
         $extension = request('copertina')->getClientOriginalExtension();
         $new_file_name = $full_file_name. ('_').time().'.'.$extension;
         $path = request('copertina')->storeAs('public/copertine', $new_file_name); 
         session()->flash('message', 'Immagine caricata con successo');
         return redirect()->back()->with('message', 'Immagine caricata con successo');

    }

}

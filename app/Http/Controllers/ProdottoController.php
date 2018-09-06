<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prodotto;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Session;

class ProdottoController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
   


    public function show($id) {


    	// dd($id);
    	$prodotto = Prodotto::find($id);
    	// dd($id);
    	return view('prodotti/show', compact('prodotto'));

    	
    }

    
    public function edit($id) {
       
        
        
        
        // $this->validate(request(), [
        //     request('nome') => 'required',
        //     request('marca') => 'required',
        //     request('categoria') => 'required',
        //     request('prezzo') => 'required',
        //     request('descrizione') => 'required'

        // ]);

        $prodotto = Prodotto::find($id);
        // dd($prodotto);
        $prodotto->nome = request('nome');
        $prodotto->marca = request('marca');
        $prodotto->categoria_id = request('id_categoria');
        $prodotto->prezzo = request('prezzo');
        $prodotto->descrizione = request('descrizione');
        $prodotto->save();

        Session::flash('message', 'Prodotto modificato con successo!');
            return Redirect::action('HomeController@index');

  




          

    }


    public function destroy($id) {

        $prodotto = Prodotto::find($id);
        $prodotto->delete();


        



        return \Redirect::action('HomeController@index');
    	
    }

    public function store() {

    //     $this->validate(request(), [
    //         'nome' => 'required',
    //         'marca' => 'required',
    //         'categoria' => 'required',
    //         'prezzo' => 'required',
    //         'descrizione' => 'required'

    //     ]);

    // $prodotti = Prodotto::all();

   

            $prodotto = new Prodotto(); 

            $prodotto->nome = request('nome');
            $prodotto->marca = request('marca');
            $prodotto->categoria_id = request('id_categoria');

          
            $prodotto->prezzo = request('prezzo');
            $prodotto->descrizione = request('descrizione');

            $prodotto->save();

       

        return \Redirect::action('HomeController@index');


    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodotto;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

        public function show($id) {


        // dd($id);
        $prodotti = Prodotto::find($id);
        // dd($id);
        return view('/show', compact('prodotti'));

        
    }


    public function edit($id) {
        $prodotto = Prodotto::find($id);

        return view('/prodotti/edit', compact('prodotto'));


    }

     public function nuovoProdotto()


    {
            
            $prodotti = Prodotto::all();

            // dd($prodotti);
            // if ((Auth::user()->isAdmin) == 1) {


                return view('prodotti/inserisci');

        //     }

        // return view('home', compact('prodotti'));

             
    }

    public function index()


    {
            
            $prodotti = Prodotto::all();
            // dd($prodotti);
            if ((Auth::user()->isAdmin) == 1) {


                return view('admin', compact('prodotti'));

            }

        return view('home', compact('prodotti'));

             
    }
}

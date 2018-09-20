@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">

<h1>Modifica prodotto</h1>	


<form method = "POST" action = "/categoria/nuova">

  {{csrf_field()}}


<div class="form-group">

      <label for="nome">Crea nuova categoria</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" placeholder='Nome' required></textarea> 
  </div>

  
  <div class = "form-group">
  <button type="submit" class="btn btn-primary">Inserisci</button>
    </div>
</form>


    <form method = "POST" action = "/prodotti/modifica/{{$prodotto->id}}">

  {{csrf_field()}}
  
  {{-- <div class="form-group">
    <label for="title">Nome</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder={{$item->nome}} required>
    
  </div> --}}

  <?php $categorie = \App\Categoria::orderBy('nome', 'asc')->get(); ?>

<div class="form-group">
  <label for="categoria_id">Scegli una categoria tra quelle esistenti</label>
    <select id = "categoria_id" name = "categoria_id" class="custom-select" required>

    	<option value ={{$prodotto->categoria_id}}>{{\App\Categoria::find($prodotto->categoria_id)->nome}}</option>
    
      @foreach ($categorie as $categoria) 

      <option value={{$categoria->id}}>{{$categoria->nome}}</option>
      @endforeach
         </select>
  </div>

  <div class="form-group">
    <label for="nome">Nome</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" value={{$prodotto->nome}} required>{{$prodotto->nome}}</textarea> 
  </div>

  <div class="form-group">
    <label for="marca">Marca</label><br/>
    <textarea id="marca" name = "marca" class = "form-control" value={{$prodotto->marca}} required>{{$prodotto->marca}}</textarea> 
  </div>

 {{--  <div class="form-group">
    <label for="body">Categoria</label><br/>
    <textarea id="categoria" name = "categoria" class = "form-control" value={{$prodotto->categoria}} required>{{$prodotto->categoria}}</textarea> 
  </div> --}}

  <div class="form-group">
    <label for="body">Prezzo</label><br/>
    <textarea id="body" name = "prezzo" class = "form-control" placeholder={{$prodotto->prezzo}} required>{{$prodotto->prezzo}}</textarea> 
  </div>

    <div class="form-group">
    <label for="body">Descrizione</label><br/>
    <textarea id="body" name = "descrizione" class = "form-control" placeholder={{$prodotto->descrizione}} required>{{$prodotto->descrizione}}</textarea> 
  </div>

  <div class="form-group">
    <label for="immagine">Immagine</label><br/>
    <input type = "file" id="immagine" name = "immagine" class = "form-control"></textarea> 
  </div>

  
  <hr>
  <div class = "form-group">
  <button type="submit" class="btn btn-primary">Modifica</button>
    </div>
@endsection

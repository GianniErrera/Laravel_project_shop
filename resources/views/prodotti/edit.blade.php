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
  <label for="id_categoria">Scegli una categoria tra quelle esistenti</label>
    <select id = "id_categoria" name = "id_categoria" class="custom-select" required>
    	<option value ={{$prodotto->id_categorias}}>{{\App\Categoria::find($prodotto->id_categorias)->nome}}</option>
    
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

  
  <hr>
  <div class = "form-group">
  <button type="submit" class="btn btn-primary">Modifica</button>
    </div>
@endsection

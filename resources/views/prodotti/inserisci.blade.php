@extends('layouts.master')

@section('content')



<div class="col-md-8 blog-main">

<h1>Inserisci un nuovo prodotto</h1> 
<hr>
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
<br/>
    <form method = "POST" action = "/prodotti/inserisci">

  {{csrf_field()}}
<?php $categorie = \App\Categoria::orderBy('nome', 'asc')->get(); ?>
<div class="form-group">
  <label for="categoria_id">Scegli una categoria tra quelle esistenti</label>
    <select id = "categoria_id" name = "categoria_id" class="custom-select" required>
    
      @foreach ($categorie as $categoria) 

      <option value={{$categoria->id}}>{{$categoria->nome}}</option>
      @endforeach
         </select>
  </div>


{{--   <div>
  
<h3><a href="/categoria/nuova">oppure crea una nuova categoria</a></h3>

</div> --}}
<div class="form-group">
    <label for="nome">Nome</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" placeholder='Nome' required></textarea> 
  </div>

  <div class="form-group">
    <label for="marca">Marca</label><br/>
    <textarea id="marca" name = "marca" class = "form-control" placeholder='Marca' required></textarea> 
  </div>

{{--   <div class="form-group">
    <label for="categoria">Categoria</label><br/>
    <textarea id="categoria" name = "categoria" class = "form-control" placeholder='Categoria' required></textarea> 
  </div>
 --}}
  <div class="form-group">
    <label for="prezzo">Prezzo</label><br/>
    <textarea id="prezzo" name = "prezzo" class = "form-control" placeholder='Prezzo' required></textarea> 
  </div>

    <div class="form-group">
    <label for="descrizione">Descrizione</label><br/>
    <textarea id="descrizione" name = "descrizione" class = "form-control" placeholder='Descrizione' required></textarea> 
  </div>

  <hr>
  <div class = "form-group">
  <button type="submit" class="btn btn-primary">Inserisci</button>
    </div>

</form>

</div>

@endsection
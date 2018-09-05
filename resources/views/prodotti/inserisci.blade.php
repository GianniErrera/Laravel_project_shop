@extends('layouts.master')

@section('content')


<div class="col-md-8 blog-main">

<h1>Inserisci un nuovo prodotto</h1> 
<hr>
    <form method = "POST" action = "/prodotti/inserisci">

  {{csrf_field()}}

<div class="form-group">
  <label for="nome">Categoria</label>
    <select id = "categoria" class="custom-select" required>
      <option value="">Scegli una categoria</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div>
  
<h3><a href="/categoria/nuova">oppure crea una nuova categoria</a></h3>

</div>
<div class="form-group">
    <label for="nome">Nome</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" placeholder='Nome' required></textarea> 
  </div>

  <div class="form-group">
    <label for="marca">Marca</label><br/>
    <textarea id="marca" name = "marca" class = "form-control" placeholder='Marca' required></textarea> 
  </div>

  <div class="form-group">
    <label for="categoria">Categoria</label><br/>
    <textarea id="categoria" name = "categoria" class = "form-control" placeholder='Categoria' required></textarea> 
  </div>

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
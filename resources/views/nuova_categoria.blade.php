@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">

<h1>Crea nuova categoria</h1>

<form method = "POST" action = "/categoria/nuova">

  {{csrf_field()}}


<div class="form-group">

      <label for="nome">Nome</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" placeholder='Nome' required></textarea> 
  </div>

  
  <div class = "form-group">
  <button type="submit" class="btn btn-primary">Inserisci</button>
    </div>
</form>
<hr>
    <h3> <div class = "form-group"> <a class="nav-link" href="/prodotti/inserisci"><b>Ritorna alla pagina per creare nuovo prodotto</b>
                </a> 
  </div>
</h3>
<br/>
<br/>
<hr>

@endsection
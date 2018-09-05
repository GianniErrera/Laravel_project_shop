@extends('layouts.master')

@section('content')
<div class="col-md-8 blog-main">

<h1>Modifica orodotto</h1>	
<hr>
    <form method = "POST" action = "/prodotti/modifica/{{$prodotto->id}}">

  {{csrf_field()}}
  
  {{-- <div class="form-group">
    <label for="title">Nome</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder={{$item->nome}} required>
    
  </div> --}}

  <div class="form-group">
    <label for="nome">Nome</label><br/>
    <textarea id="nome" name = "nome" class = "form-control" value={{$prodotto->nome}} required>{{$prodotto->nome}}</textarea> 
  </div>

  <div class="form-group">
    <label for="marca">Marca</label><br/>
    <textarea id="marca" name = "marca" class = "form-control" value={{$prodotto->marca}} required>{{$prodotto->marca}}</textarea> 
  </div>

  <div class="form-group">
    <label for="body">Categoria</label><br/>
    <textarea id="categoria" name = "categoria" class = "form-control" value={{$prodotto->categoria}} required>{{$prodotto->categoria}}</textarea> 
  </div>

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

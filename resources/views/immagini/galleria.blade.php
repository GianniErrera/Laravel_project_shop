@extends('layouts.master')

@section('content')
<div class = "col-md-8 blog-main">

@if ($flash = session('message'))
<div  class = "alert alert-success" role = "alert">
{{$flash}}
</div>
@endif
<br/>
<br/>

<form action = "/galleria/carica/{{$id}}" method = "POST" enctype = "multipart/form-data">
	{{csrf_field()}}
	<label for "file">Scegli immagine da caricare come copertina per la categoria</label>
	<br/>
	<br/>	
<input type = "file" name = "immagine" id = "immagine">
<br/>
<br/>
<label for "descrizione">Inserisci qui una descrizione - facoltativo</label>
<textarea id = 'descrizione' name = 'descrizione' class = "form-control" placeholder = "Inserisci una descrizione"></textarea>
<button type = "submit" class = "btn btn-primary">Carica copertina</button>
</form>
@include('layouts.alerts')
</div>
@endsection
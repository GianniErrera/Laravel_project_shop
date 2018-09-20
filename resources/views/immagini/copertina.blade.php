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

<form action = "/copertina/carica/{{$id}}" method = "POST" enctype = "multipart/form-data">
	{{csrf_field()}}
	<label for "file">Scegli immagine da caricare come copertina per la categoria</label>
	<br/>
	<br/>	
<input type = "file" name = "copertina" id = "copertina">
<br/>
<br/>
<button type = "submit" class = "btn btn-primary">Carica copertina</button>
</form>
@include('layouts.alerts')
</div>
@endsection
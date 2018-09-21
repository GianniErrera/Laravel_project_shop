@extends('layouts.master')

@section('content')
@include('layouts.carousel')


<div class = "row">
	@foreach ($prodotti as $prodotto)

	@include('prodotti/prodotto_admin')

     @endforeach


      @if (Auth::user()->isAdmin == 1)
      <br/>

        <div class = "form-group">
  <form method = "GET" action = "/prodotti/inserisci" > 
     {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Nuovo prodotto</button></form>
</div>
   &nbsp;
<div class = "form-group">
  <form method = "GET" action = "/categoria/immagine/{{$prodotti->first()->categoria->id}}" > 
     {{csrf_field()}}
{{--  non è elegante ma non sono riuscito a trovare un metodo migliore per recuperare l'id categoria da passare al controller --}}

    <button type="submit" class="btn btn-primary">Inserisci copertina</button></form>
</div>
@endif

   </div>

@endsection
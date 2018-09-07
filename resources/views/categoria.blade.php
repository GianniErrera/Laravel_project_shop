@extends('layouts.master')

@section('content')
@include('layouts.carousel')

<div class = "row">
	@foreach ($prodotti as $prodotto)

	@include('prodotti/prodotto')

     @endforeach


{{--       @if (Auth::user()->isAdmin == 1)
        <div class = "form-group">
  <form method = "GET" action = "/prodotti/inserisci" > 
     {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Nuovo prodotto</button></form>
</div>
@endif --}}

       



 

@endsection
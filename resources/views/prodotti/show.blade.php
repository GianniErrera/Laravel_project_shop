

@extends('layouts.master')

@section('content')

{{-- <div class="col-lg-4 col-md-6 mb-4"> --}}
	<div class="col-lg-9">
           {{--    <div class="card h-200" style = "width:75%;" > --}}
           	<div class = "container">
               @if ($prodotto->immagine->count())                
                <a href = "/storage/{{$prodotto->id}}/{{$prodotto->immagine->first()->immagine}}"><img src = "/storage/{{$prodotto->id}}/{{$prodotto->immagine->first()->immagine}}" width = "400">
                </a>
                @else
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                @endif
                <div class="card-body">
                  <h4 class="card-title">
                    {{$prodotto->nome}}
                  </h4>
                  <h4>{{$prodotto->marca}}</h4>
                  <h5>€{{$prodotto->prezzo}}</h5>
                  <p class="card-text">{{$prodotto->descrizione}}</p>
                  <div class = "containter">
                  @foreach ($prodotto->immagine as $immagine)

                  <a href = "/storage/{{$prodotto->id}}/{{$immagine->immagine}}"><img src = "/storage/{{$prodotto->id}}/{{$immagine->immagine}}" width = "250")></a>

                    @endforeach
                    </div>  


{{--                     @if(isset($prodotto->categoria->nome)): 

     {{"OK"}}
   @else

     {{'empty'}}
   @endif --}}

{{--       --}}
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              	</div>
     
@endsection
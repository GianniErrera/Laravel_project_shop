@extends('layouts.master')

@section('content')
<div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                {{"/copertine/".$prodotti->first()->categoria->copertina}}
                <img class="d-block img-fluid" src="/copertine/{{$prodotti->first()->categoria->copertina}}" alt="First slide">
                }
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


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
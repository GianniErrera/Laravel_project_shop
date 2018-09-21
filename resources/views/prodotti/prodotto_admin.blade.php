
<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
{{--                 @if ($prodotto->has('immagine'))
                <a href= "#"><img class="card-img-top" src="/storage/{{$immagine->id}}/{{$immagine->immagine}}" alt=""></a> --}}
{{--                 <a href = "#"><img class = 'card-img-top' src = "storage/{{$prodotto->id}}/{{$prodotto->immagine->first()"}} alt = "{{$prodotto->immagine->first()->descrizione}}"></a> --}}
{{--                   @else --}}
{{--                 <a href= "#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> --}}
{{--                 @endif --}}
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/prodotti/{{$prodotto->id}}">{{$prodotto->nome}}</a>
                  </h4>
                  <h4>{{$prodotto->marca}}</h4>
                  <h5>€{{$prodotto->prezzo}}</h5>
                  <p class="card-text">{{$prodotto->descrizione}}</p>
                </div>
                 <div class = "form-group">
  <form method = "GET" action = "/prodotti/modifica/{{$prodotto->id}}" > 
     {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Modifica</button></form>
</div>

{{-- <a class = "btn" href = "">Modifica</a>
<a class = "btn" href = "">Elimina</a>     --}}
<div class = "form-group">
<form method = "POST" action = "/prodotti/elimina/{{$prodotto->id}}">



  {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Rimuovi</button>
  
  </form>
</div>


    <div class = "form-group">
                        <form method = "GET" action = "/immagini/carica/{{$prodotto->id}}">
                          {{csrf_field()}}
                            <button type="submit" class="btn btn-primary">Aggiungi immagine</button>                          
                          </form>
                          </div>

    
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              	</div>
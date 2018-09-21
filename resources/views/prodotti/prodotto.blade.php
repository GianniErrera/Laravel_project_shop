

<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
{{--                 @if ($prodotto->has('immagine'))
                <a href = "{{$prodotto->immagine->first();">src = "{{$prodotto->immagine->first();}}
                  @else --}}
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              {{--   @endif --}}
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/prodotti/{{$prodotto->id}}">{{$prodotto->nome}}</a>
                  </h4>
                  <h4>{{$prodotto->marca}}</h4>
                  <h5>€{{$prodotto->prezzo}}</h5>
                  <p class="card-text">{{$prodotto->descrizione}}</p>
                </div>
                @if (Auth::user()->isAdmin == 1)

                



                        <div class = "form-group">
                          <form method = "GET" action = "/prodotti/modifica/{{$prodotto->id}}" > 
                             {{csrf_field()}}
                            <button type="submit" class="btn btn-primary">Modifica</button>
                          </form>
                        </div>

                        
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

                @endif


                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              	</div>





 <div class="col-lg-3">

          <h1 class="my-4">Emporio da zio Gianni</h1>
          <div class="list-group">
            @foreach ($categorie as $categoria)
            <a href="/categoria/{{$categoria->id}}" class="list-group-item">{{$categoria->nome}} ({{$categoria->prodotto->count()}})</a>
            @endforeach
          </div>


        </div>
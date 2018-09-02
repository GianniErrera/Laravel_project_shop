@extends('layouts.master')


@section('content')


          @include('layouts.carousel')

          <div class="row">

          	@foreach($prodotti as $prodotto)



				@include('prodotti/prodotto_admin')


				@endforeach

        <div class = "form-group">
  <form method = "GET" action = "/prodotti/inserisci" > 
     {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Nuovo prodotto</button></form>
</div>



         {{--  <div><a href ="http://www.stackoverflow.com/">
    <button type="button" class="btn btn-primary btn-lg" height = "100"">Inserisci articolo</button>
</a></div> --}}
		
{{--           @endfor --}}


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
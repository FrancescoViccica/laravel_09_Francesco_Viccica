<x-layout>
  
  
  
  
  {{-- Header --}}
  <div class="container-fluid articoli">
    <div class="row h-100 justify-content-center">
      {{-- @dd($articoli) --}}
      <div class="row">
        <h2 class="display-5 text-white text-center text-color"> {{$articolo['title']}}</h2>
      </div>
      {{-- @dd($articolo) --}}
      
      <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
        <h3>{{ $articolo['title'] }}</h3>
        <h4>{{$articolo['genres']}}</h4>

      </div>

      <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
        <img class="custom-img" src="{{ $articolo['img'] }}" alt="Immagine dell'articolo {{ $articolo['img'] }}">


      </div>
    </div>
  </div>
  
</x-layout>
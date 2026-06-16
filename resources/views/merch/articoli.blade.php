<x-layout>
  
  
  
  
  {{-- Header --}}
  <div class="container-fluid articoli">
    <div class="row h-100 justify-content-center">
      {{-- @dd($articoli) --}}
      <div class="row">
        <h2 class="display-5 text-white text-center text-color">I NOSTRI ARTICOLI</h2>
      </div>
      @foreach ($articoli as $articolo )

      <div class="col-12 col-md-3">
       <x-cardArticle
       
       title="{{ $articolo['title'] }}"
       genres="{{ $articolo['genres'] }}"
       articleId="{{ $articolo['id'] }}"
       img="{{ $articolo['img'] }}"
       
       ></x-cardArticle>
      </div>

      @endforeach
    </div>
  </div>
  
</x-layout>
        <div class="card my-3" style="width: 18rem;">
          <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $genres }}</p>
            <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a>
          </div>
        </div>


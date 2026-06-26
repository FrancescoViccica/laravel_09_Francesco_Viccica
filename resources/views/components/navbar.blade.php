 {{-- NAVBAR --}}

  <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
    <div class="container-fluid align-items-center">
      <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-emoji-grin-fill"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link button" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link button" href="{{ route('aboutUs') }}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link button" href="{{ route('contacts') }}">Contatti</a>
          </li>

          <li class="nav-item">
            <a class="nav-link button" href="{{ route('merch.create') }}">Inserisci Prodotto</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              I Nostri Articoli
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('merch.list') }}">Tutti i nostri articoli</a></li>
              
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
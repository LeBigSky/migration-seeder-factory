<header>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">M S F</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if ( Route::is('batiment'))
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('batiment') }}">Bâtiments</a>
              </li>
              @else
                   <li class="nav-item">
                <a class="nav-link" href="{{ route('batiment') }}">Bâtiments</a>
              </li>
              @endif
             @if (Route::is('formations'))
             <li class="nav-item">
              <a class="nav-link active" href="{{ route('formations') }}">Formations</a>
            </li>
             @else
             <li class="nav-item">
              <a class="nav-link" href="{{ route('formations') }}">Formations</a>
            </li>
             @endif
             @if (Route::is('types'))
             <li class="nav-item">
              <a class="nav-link active" href="{{ route('types') }}">Types de formations</a>
            </li>
             @else
             <li class="nav-item">
              <a class="nav-link" href="{{ route('types') }}">Types de formations</a>
            </li>
             @endif
            @if (Route::is('eleves'))
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('eleves') }}">Élèves</a>
            </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('eleves') }}">Élèves</a>
              </li>
            @endif
            </ul>
          </div>
        </div>
      </nav>
</header>


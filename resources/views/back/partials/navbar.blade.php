<header>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <i class="fa-solid fa-screwdriver-wrench"></i> M S F</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.batiments') }}">Bâtiments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.formations') }}">Formations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.types') }}">Types de formations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.eleves') }}">Élèves</a>
              </li>
              <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="25"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                      />
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> <button class="btn btn-danger">Log out</button> </a></li>
                    </ul>
                  </li>
            </ul>
            </ul>
       
            
          </div>
        </div>
      </nav>
</header>
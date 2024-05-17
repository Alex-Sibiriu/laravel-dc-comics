<header>

  <nav class="navbar navbar-expand-lg bg-black p-0 h-100">
    <div class="container h-100">

      <div class="collapse navbar-collapse h-100" id="navbarNav">
        <ul class="navbar-nav h-100">
          <li class="nav-item h-100">
            <a class="nav-link d-flex justify-content-center align-items-center px-3 text-white h-100 {{ Route::currentRouteName() === 'home' ? 'page-active' : '' }}"
              aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex justify-content-center align-items-center px-3 text-white h-100 {{ Route::currentRouteName() === 'comics.index' ? 'page-active' : '' }}"
              href="{{ route('comics.index') }}">Lista dei Fumetti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex justify-content-center align-items-center px-3 text-white h-100 {{ Route::currentRouteName() === 'comics.create' ? 'page-active' : '' }}"
              href="{{ route('comics.create') }}">Aggiungi un Fumetto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

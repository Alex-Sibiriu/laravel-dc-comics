<header>

  <nav class="navbar navbar-expand-lg bg-black py-4">
    <div class="container">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('comics.index') }}">Comics Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('comics.create') }}">Comics Create</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

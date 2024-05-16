@extends('layout.main')

@section('content')
  <h1 class="text-center fw-bold py-5">{{ $comic->title }}</h1>
  <div class="d-flex">
    <div>
      <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>

    <div>
      <p class="py-3"><strong>Serie: </strong>{{ $comic->series }}</p>
      <p class="py-3"><strong>Data d'uscita: </strong>{{ $comic->sale_date }}</p>
      <p class="py-3"><strong>Tipo: </strong>{{ $comic->type }}</p>
      <p class="py-3"><strong>Generi: </strong>{{ $comic->series }}</p>
      <p class="py-3"><strong>Descrizione: </strong>{{ $comic->description }}</p>

      <div class="d-flex">
        <ul class="list-unstyled pe-5">
          <li class="fw-bold">Artisti:</li>
          @forelse (explode(',', $comic->artists) as $artist)
            <li>{{ $artist }}</li>
          @empty
            <h4>Nessun artista trovato</h4>
          @endforelse
        </ul>

        <ul class="list-unstyled ps-5">
          <li class="fw-bold">Scrittori:</li>
          @forelse (explode(',', $comic->writers) as $writer)
            <li>{{ $writer }}</li>
          @empty
            <h4>Nessun scrittore trovato</h4>
          @endforelse
        </ul>
      </div>

    </div>
  </div>
@endsection

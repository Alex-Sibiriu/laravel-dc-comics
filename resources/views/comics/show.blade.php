@extends('layout.main')

@section('content')
  <h1 class="text-center fw-bold py-5">{{ $comic->title }}</h1>
  <div class="d-flex">
    <div class="w-50 px-5">
      <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>

    <div class="ps-5">
      <p class="py-2"><strong>Data di pubblicazione: </strong>{{ $comic->sale_date }}</p>
      <p class="py-2"><strong>Tipo: </strong>{{ $comic->type }}</p>
      <p class="py-2"><strong>Generi: </strong>{{ $comic->series }}</p>
      <p class="py-2"><strong>Prezzo: </strong>{{ $comic->price }}</p>

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
  <p class="p-5"><strong>Descrizione: </strong>{{ $comic->description }}</p>
@endsection

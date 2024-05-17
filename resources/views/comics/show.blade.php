@extends('layout.main')

@section('content')
  <h1 class="text-center fw-bold py-5 mt-3 text-white rounded-3 bg-gray p-3 text-center">{{ $comic->title }}
    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-outline-dark"><i
        class="fa-solid fa-pencil"></i></a>
    @include('partials.form_delete')
  </h1>
  <div class="d-flex text-white pt-5 rounded-3 bg-gray">
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
  <div class="p-5 text-white rounded-3 bg-gray">
    <p><strong>Descrizione: </strong>{{ $comic->description }}</p>
    <a class="btn btn-info btn-outline-primary  text-white" href="{{ route('comics.index') }}">Comics Index</a>
  </div>
@endsection

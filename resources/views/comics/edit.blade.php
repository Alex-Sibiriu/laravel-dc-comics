@extends('layout.main')

@section('content')
  <h1 class="py-5 text-white text-center mt-3 rounded-3 bg-gray">Modifica il fumetto</h1>

  <form class="row text-white rounded-3 bg-gray p-5" action='{{ route('comics.update', $comic) }}' method='POST'>
    @csrf
    @method('PUT')

    <div class="col-6 mb-3">
      <label for="title" class="form-label">Titolo (title)</label>
      <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}" required>
    </div>

    <div class="col-6 mb-3">
      <label for="thumb" class="form-label">Immagine (thumb)</label>
      <input name="thumb" type="text" class="form-control" id="thumb" value="{{ $comic->thumb }}" required>
    </div>

    <div class="col-6 mb-3">
      <label for="series" class="form-label">Generi (series)</label>
      <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series }}" required>
    </div>

    <div class="col-6 mb-3">
      <label for="sale_date" class="form-label">Data di pubblicazione (sale_date)</label>
      <input name="sale_date" type="date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}" required>
    </div>

    <div class="col-6 mb-3">
      <label for="type" class="form-label">Tipologia (type)</label>
      <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type }}" required>
    </div>

    <div class="col-6 mb-3">
      <label for="price" class="form-label">Prezzo (price)</label>
      <input name="price" type="text" class="form-control" id="price" value="{{ $comic->price }}" required>
    </div>

    <div class="col-12 mb-3">
      <label for="description" class="form-label">Descrizione (description)</label>
      <textarea name="description" class="form-control" id="description" rows="10" required>{{ $comic->description }}"</textarea>
    </div>

    <div class="col-6 mb-3">
      <label for="artists" class="form-label">Artisti (separati da una virgola)</label>
      <textarea name="artists" class="form-control" id="artists" rows="10" required>{{ $comic->artists }}"</textarea>
    </div>

    <div class="col-6 mb-3">
      <label for="writers" class="form-label">Scrittori (separati da una virgola)</label>
      <textarea name="writers" class="form-control" id="writers" rows="10" required>{{ $comic->writers }}"</textarea>
    </div>

    <div class="text-center pt-3">
      <button type="submit" class="btn btn-primary w-25 me-3">Invia</button>
      <button type="reset" class="btn btn-warning w-25">Reset</button>
    </div>
  </form>
@endsection
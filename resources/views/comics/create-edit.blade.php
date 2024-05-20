@extends('layout.main')

@section('content')
  <h1 class="py-5 text-white text-center mt-3 rounded-3 bg-gray">{{ $title }}</h1>

  <form class="row text-white rounded-3 bg-gray p-5" action='{{ $route }}' method='POST'>
    @csrf
    @method($method)

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="col-6 mb-3">
      <label for="title" class="form-label">Titolo (title)</label>
      <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
        value="{{ old('title', $comic?->title) }}">
      @error('title')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="thumb" class="form-label">Immagine (thumb)</label>
      <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
        value="{{ old('thumb', $comic?->thumb) }}">
      @error('thumb')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="series" class="form-label">Generi (series)</label>
      <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series"
        value="{{ old('series', $comic?->series) }}">
      @error('series')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="sale_date" class="form-label">Data di pubblicazione (sale_date)</label>
      <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
        value="{{ old('sale_date', $comic?->sale_date) }}">
      @error('sale_date')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="type" class="form-label">Tipologia (type)</label>
      <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type"
        value="{{ old('type', $comic?->type) }}">
      @error('type')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="price" class="form-label">Prezzo (price)</label>
      <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price"
        value="{{ old('price', $comic?->price) }}">
      @error('price')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-12 mb-3">
      <label for="description" class="form-label">Descrizione (description)</label>
      <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
        rows="10">{{ old('description', $comic?->description) }}</textarea>
      @error('description')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="artists" class="form-label">Artisti (separati da una virgola)</label>
      <textarea name="artists" class="form-control @error('artists') is-invalid @enderror" id="artists" rows="10">{{ old('artists', $comic?->artists) }}</textarea>
      @error('artists')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="col-6 mb-3">
      <label for="writers" class="form-label">Scrittori (separati da una virgola)</label>
      <textarea name="writers" class="form-control @error('writers') is-invalid @enderror" id="writers" rows="10">{{ old('writers', $comic?->writers) }}</textarea>
      @error('writers')
        <small class="text-danger fw-bold">
          {{ $message }}
        </small>
      @enderror
    </div>

    <div class="text-center pt-3">
      <button type="submit" class="btn btn-primary w-25 me-3">Invia</button>
      <button type="reset" class="btn btn-warning w-25">Reset</button>
    </div>
  </form>
@endsection

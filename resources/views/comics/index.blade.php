@extends('layout.main')

@section('content')
  <h1 class="py-5 text-center text-white rounded-3 bg-gray p-3 mt-3">Numero Comics: {{ $num_comics }}</h1>

  @if (session('delete_message'))
    <div class="alert alert-success" role="alert">
      {{ session('delete_message') }}
    </div>
  @endif

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Genere</th>
        <th scope="col">Tipo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($comics as $comic)
        <tr>
          <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->price }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->type }}</td>
          <td>
            <a href="{{ route('comics.show', $comic) }}" class="btn btn-info btn-outline-primary"><i
                class="fa-solid fa-eye"></i></a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning btn-outline-dark "><i
                class="fa-solid fa-pencil"></i></a>
            @include('partials.form_delete')
          </td>
        </tr>
      @empty
        <h2>Nessun fumetto trovato</h2>
      @endforelse

    </tbody>
  </table>
@endsection

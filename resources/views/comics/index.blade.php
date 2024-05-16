@extends('layout.main')

@section('content')
  <h1>Comics Index</h1>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
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
            <a href="#"><i class="fa-solid fa-eye"></i></a>
            <a href="#"><i class="fa-solid fa-pencil"></i></a>
            <a href="#"><i class="fa-solid fa-trash-can"></i></a>
          </td>
        </tr>
      @empty
        <h2>Nessun fumetto trovato</h2>
      @endforelse

    </tbody>
  </table>
@endsection

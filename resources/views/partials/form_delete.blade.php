<form action="{{ route('comics.destroy', $comic) }}" method="POST"
  onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')" class="d-inline-block">
  @csrf
  @method('DELETE')

  <button type="submit" class="btn btn-danger btn-outline-light "><i class="fa-solid fa-trash-can"></i></button>
</form>

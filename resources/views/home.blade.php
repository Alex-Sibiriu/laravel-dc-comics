@extends('layout.main')

@section('content')
  <section class="text-white py-5">
    <article class="mb-5 rounded-3 bg-gray p-3">
      <h2>Ultima Uscita</h2>
      <p>Scopri il nostro ultimo fumetto e immergiti in un'avventura epica! La storia racconta di un eroe che deve
        affrontare prove difficili per salvare il mondo dal male. Con illustrazioni mozzafiato e una trama avvincente,
        questo fumetto ti terrà con il fiato sospeso fino all'ultima pagina.</p>
      <a href="{{ route('show-latest') }}">Scopri di più</a>
    </article>
    <article class="mb-5 rounded-3 bg-gray p-3">
      <h2>Articolo in Evidenza</h2>
      <p>Leggi l'intervista esclusiva con l'autore del nostro fumetto del mese. Scopri cosa ha ispirato l'autore a creare
        questa incredibile storia, i suoi metodi di lavoro e i suoi progetti futuri. Un'intervista imperdibile per tutti
        gli appassionati di fumetti!</p>
      <a href="#">Leggi l'intervista</a>
    </article>
    <section class="mb-5 rounded-3 bg-gray p-3">
      <h2>Pubblicità</h2>
      <img src="https://i0.wp.com/meganerd.it/wp-content/uploads/2022/07/dc-comics-sdcc.jpg?resize=840%2C541&ssl=1"
        alt="Pubblicità">
    </section>
    <section class="bg-gray rounded-3 p-3">
      <h2>Iscriviti alla Newsletter</h2>
      <p>Rimani aggiornato sulle ultime novità e promozioni! Iscriviti alla nostra newsletter per ricevere in anteprima le
        ultime notizie sui fumetti, le offerte speciali e molto altro ancora.</p>
      <form action="#">
        <input type="email" name="email" placeholder="Inserisci il tuo indirizzo email">
        <button type="submit">Iscriviti</button>
      </form>
    </section>
  </section>
@endsection

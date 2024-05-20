@extends('layout.main')

@section('content')
  <div class="home bg-gray p-3 rounded-3 mt-5">
    <section id="quick-actions">
      <h2>Azioni Rapide</h2>
      <div class="action-grid">
        <div class="action-item">
          <a href="{{ route('comics.create') }}">Aggiungi Nuovo Fumetto</a>
        </div>
        <div class="action-item">
          <a href="{{ route('comics.index') }}">Gestisci Fumetti Esistenti</a>
        </div>
      </div>
    </section>

    <section id="recent-activity">
      <h2>Attività Recente</h2>
      <ul>
        <li>Fumetto "{{ $last_comic->title }}" aggiunto da Mario Rossi il {{ $last_comic->created_at }}</li>
        <li>Dati aggiornati per "{{ $updated_comic->title }}" da Luca Bianchi il {{ $last_comic->updated_at }}</li>
      </ul>
    </section>

    <section id="system-status">
      <h2>Stato del Sistema</h2>
      <p>Sistema operativo: Windows 10 Pro</p>
      <p>Database: MySQL</p>
      <p>Stato: Operativo</p>
    </section>

    <section id="admin-messages">
      <h2>Messaggi dell'Amministratore</h2>
      <p>Promemoria: Effettuare backup settimanale del database.</p>
      <p>Aggiornamento: La manutenzione programmata avverrà il 25 maggio.</p>
    </section>
  </div>
@endsection

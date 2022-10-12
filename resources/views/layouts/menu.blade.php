<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('cines-index')}}">
      CineFamily
    </a>
    <button class="navbar-toggler" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('cines-create') }}">Cinemas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('movieTheaters-index') }}">Salas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('movies-index') }}">Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('genres-index') }}">Gêneros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" href="{{ route('timeReservations-index') }}" type = submit data-bs-toggle="dropdown" >
            Reservas
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
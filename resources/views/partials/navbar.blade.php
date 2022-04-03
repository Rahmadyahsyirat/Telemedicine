<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="/">Darussalam Medical Center</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </ul>

    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Welcome back, {{auth()->user()->name}}</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>

            <form action="/logout" method="post">
              @csrf
              <button type="submit" <i class="bi bi-arrow-right-circle-fill"></i> Logout </button>
            </form>
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item ms-auto">
        <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}"><i class="bi bi-arrow-left-circle-fill"></i>
          Login</a>
      <li>
        @endauth
        <ul>
  </div>
  </div>
</nav>
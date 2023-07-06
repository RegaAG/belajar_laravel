<nav class="navbar bg-danger navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand text-white" href="/">Belajar Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'text-dark' : 'text-white' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('project') ? 'text-dark' : 'text-white' }}" href="/project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kategori') ? 'text-dark' : 'text-white' }}" href="/kategori">Kategori</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto ">
          @auth
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Hai {{ auth()->user()->name }} <i class="bi bi-heart"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-columns"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            
            </form>
          </ul>
        </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'text-dark' : 'text-white' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
          @endauth
        </ul>
        
    </div>
  </nav>
</div>


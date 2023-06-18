

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="/">CeKing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home" ) ? 'active' : '' }}" href="/"><i class="bi bi-house-door"></i> Home</a>
        </li>
        @endguest
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === "Artikel" ) ? 'active' : '' }}" href="/artikel">Artikel</a>
        </li> --}}
      </ul>
      <ul class="navbar-nav">
        {{-- Halaman yang tampil jika user sudah login --}}
        @auth
        {{-- <li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
        </li> --}}
        
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Beranda" ) ? 'active' : '' }}" href="/beranda"><i class="bi bi-layout-text-window"></i> Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Anak" ) ? 'active' : '' }}" href="/anak">Anak</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              {{-- <li><a class="dropdown-item" href="/beranda"><i class="bi bi-layout-text-window"></i> Beranda</a></li> --}}
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else 
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === "login" ) ? 'active' : '' }}"><i class="bi bi-people"></i> Masuk</a>
            </li>
          @endauth
      </ul>
    </div>
  </div>
</nav>
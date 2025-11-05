<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INAKLUG - @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="container nav-inner">
      <div class="brand">
        <a href="{{ route('home') }}" class="brand-link">
          <img src="{{ asset('images/logo.png') }}" alt="Logo INAKLUG" class="logo-img">
        </a>
      </div>

      <!-- Tombol hamburger -->
      <button class="menu-toggle" id="menu-toggle">☰</button>

      <!-- Menu navigasi -->
      <nav class="menu" id="menu">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Kami</a>
        <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
        <a href="{{ route('artikel') }}" class="{{ request()->routeIs('artikel') ? 'active' : '' }}">Artikel</a>
        <a href="{{ route('hubungi') }}" class="{{ request()->routeIs('hubungi') ? 'active' : '' }}">Hubungi Kami</a>
      </nav>

      <!-- Pencarian & Tombol -->
      <div class="nav-actions">
        <form class="search-form" action="{{ route('artikel') }}" method="GET">
          <input type="text" name="q" placeholder="ketik Pencarian..." class="search-input">
          <button type="submit" class="search-btn">🔍</button>
        </form>
        <button class="btn daftar">DAFTAR ONLINE</button>
      </div>
    </div>
  </header>

  <!-- KONTEN UTAMA -->
  <main>
    @yield('content')
  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <p>© 2025 INAKLUG | Konsultan Pendidikan Luar Negeri Indonesia</p>
  </footer>

  <!-- SCRIPT NAVBAR -->
  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle.addEventListener('click', () => {
      menu.classList.toggle('show');
      toggle.textContent = menu.classList.contains('show') ? '✕' : '☰';
    });
  </script>

</body>
</html>

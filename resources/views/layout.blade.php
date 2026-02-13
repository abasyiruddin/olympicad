<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EduFuture ID — Platform Inovasi Digital Pendidikan Masa Depan untuk Pelajar dan Pengajar Indonesia." />
  <title>EduFuture ID — @yield('title')</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>

  <!-- ═══════════════════════════════════════════
       NAVBAR
  ═══════════════════════════════════════════ -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <span class="brand-edu">Edu</span><span class="brand-future">Future</span><span class="brand-id">ID</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
          <li class="nav-item"><a class="nav-link " href="{{ url('beranda') }}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link " href="{{ url('profil') }}">Profil</a></li>
          <li class="nav-item"><a class="nav-link " href="{{ url('kontak') }}">Kontak</a></li>
          <li class="nav-item"><a class="nav-link nav-cta" href="{{ url('chatbot') }}"><i class="bi bi-robot me-1"></i>EduBot AI</a></li>
        </ul>
      </div>
    </div>
  </nav>
@yield('content')
  <!-- ═══════════════════════════════════════════
       FOOTER
  ═══════════════════════════════════════════ -->
  <footer>
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <span style="color:var(--white)">Edu</span><span style="color:var(--primary)">Future</span><span style="color:var(--teal); font-size:0.7em; vertical-align:super;">ID</span>
          </div>
          <p class="footer-desc">
            Platform inovasi digital pendidikan masa depan untuk pelajar dan pengajar Indonesia. Bersama, kita wujudkan generasi emas 2045.
          </p>
          <div class="social-links">
            <a href="#" class="social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-btn" aria-label="Twitter/X"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="social-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-btn" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="footer-heading">Platform</div>
          <ul class="footer-links">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/profil') }}">Profil Kami</a></li>
            <li><a href="#">AI Learning</a></li>
            <li><a href="#">Perpustakaan</a></li>
            <li><a href="#">Kelas Virtual</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="footer-heading">Dukungan</div>
          <ul class="footer-links">
            <li><a href="{{ url('/kontak') }}">Kontak</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Panduan Pengguna</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat & Ketentuan</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-heading">Newsletter</div>
          <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:16px;">Dapatkan artikel terbaru dan update platform langsung di inbox Anda.</p>
          <div class="d-flex gap-2">
            <input type="email" placeholder="email@anda.com" class="form-control-custom grow" style="border-radius:10px;" />
            <button class="send-btn" style="border-radius:10px; width:48px; height:48px; flex-shrink:0;" aria-label="Subscribe"><i class="bi bi-send"></i></button>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2026 EduFuture ID. Dibuat dengan ❤️ untuk pendidikan Indonesia.</p>
        <p>Semua hak dilindungi undang-undang.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <!-- Custom Script -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

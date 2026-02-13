@extends('layout')
@section('title', 'Beranda')
@section('content')
  
  <!-- ═══════════════════════════════════════════
       HERO SECTION
  ═══════════════════════════════════════════ -->
  <section class="hero grid-bg">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-glow-1"></div>
    <div class="hero-glow-2"></div>

    <div class="container py-5">
      <div class="row align-items-center gy-5">
        <!-- Left Content -->
        <div class="col-lg-6">
          <div class="hero-content">
            <div class="hero-badge">
              <span class="live-dot"></span>
              Platform Aktif · 2024
            </div>
            <h1>
              Mewujudkan<br />
              <span class="text-glow">Pendidikan Masa Depan</span><br />
              dengan Teknologi.
            </h1>
            <p>
              Platform inovasi digital untuk pelajar dan pengajar Indonesia. Belajar lebih cerdas, lebih cepat, dan lebih menyenangkan dengan kecerdasan buatan.
            </p>
            <div class="hero-buttons">
              <a href="{{ url('/chatbot') }}" class="btn-primary-custom">
                <i class="bi bi-play-fill"></i>
                Mulai Belajar
              </a>
              <a href="{{ url('/profil') }}" class="btn-outline-custom">
                <i class="bi bi-info-circle"></i>
                Tentang Kami
              </a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat">
                <div class="num" data-count="120" data-suffix="K+">0</div>
                <div class="label">Pelajar Aktif</div>
              </div>
              <div class="hero-stat">
                <div class="num" data-count="500" data-suffix="+">0</div>
                <div class="label">Kursus Tersedia</div>
              </div>
              <div class="hero-stat">
                <div class="num" data-count="98" data-suffix="%">0</div>
                <div class="label">Kepuasan Pengguna</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Visual Card -->
        <div class="col-lg-6">
          <div class="hero-visual">
            <div class="hero-visual-card">
              <div class="hero-img-wrap">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80" alt="Teknologi Pendidikan" loading="lazy" />
              </div>
              <div class="mini-stats">
                <div class="mini-stat-item">
                  <div class="val">AI ⚡</div>
                  <div class="desc">Pembelajaran Adaptif</div>
                </div>
                <div class="mini-stat-item">
                  <div class="val">24/7</div>
                  <div class="desc">Akses Kapan Saja</div>
                </div>
                <div class="mini-stat-item">
                  <div class="val">34+</div>
                  <div class="desc">Provinsi Terjangkau</div>
                </div>
                <div class="mini-stat-item">
                  <div class="val">🏆 #1</div>
                  <div class="desc">EduTech Indonesia</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-scroll-hint">
      <div class="scroll-line"></div>
      <span>Gulir ke bawah</span>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       FEATURES SECTION
  ═══════════════════════════════════════════ -->
  <section class="section features grid-bg" id="features">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag mx-auto"><span class="dot"></span> Keunggulan Platform</div>
        <h2 class="section-title animate-on-scroll">
          Fitur Unggulan<br /><span class="highlight">EduFuture ID</span>
        </h2>
        <div class="divider center"></div>
        <p class="section-subtitle mx-auto text-center animate-on-scroll animate-delay-1">
          Dirancang khusus untuk ekosistem pendidikan Indonesia yang inklusif dan berteknologi tinggi.
        </p>
      </div>

      <div class="row g-4">
        <!-- AI Learning -->
        <div class="col-md-4 animate-on-scroll animate-delay-1">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Unggulan</div>
            <div class="feature-icon-wrap">🤖</div>
            <h4>AI Learning</h4>
            <p>Sistem kecerdasan buatan yang menyesuaikan materi pelajaran dengan kecepatan dan gaya belajar unik setiap siswa secara real-time.</p>
            <a href="{{ url('/chatbot') }}" class="read-more mt-3">Coba EduBot <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- Perpustakaan Digital -->
        <div class="col-md-4 animate-on-scroll animate-delay-2">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Terlengkap</div>
            <div class="feature-icon-wrap">📚</div>
            <h4>Perpustakaan Digital</h4>
            <p>Akses ribuan buku teks, jurnal ilmiah, dan modul pembelajaran interaktif dari seluruh Indonesia dan dunia, gratis untuk semua pelajar.</p>
            <a href="#" class="read-more mt-3">Jelajahi Koleksi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- Kelas Virtual -->
        <div class="col-md-4 animate-on-scroll animate-delay-3">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Live</div>
            <div class="feature-icon-wrap">🎓</div>
            <h4>Kelas Virtual</h4>
            <p>Bergabung dalam sesi belajar langsung bersama guru terbaik Indonesia via video interaktif, lengkap dengan whiteboard digital dan quiz live.</p>
            <a href="#" class="read-more mt-3">Lihat Jadwal <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- Sertifikasi -->
        <div class="col-md-4 animate-on-scroll animate-delay-1">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Resmi</div>
            <div class="feature-icon-wrap">🏅</div>
            <h4>Sertifikasi Digital</h4>
            <p>Dapatkan sertifikat kompetensi yang diakui industri setelah menyelesaikan program. Tingkatkan nilai CV dan karier profesional Anda.</p>
            <a href="#" class="read-more mt-3">Info Sertifikasi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- Komunitas -->
        <div class="col-md-4 animate-on-scroll animate-delay-2">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Komunitas</div>
            <div class="feature-icon-wrap">🤝</div>
            <h4>Forum Belajar</h4>
            <p>Diskusi, tanya jawab, dan kolaborasi proyek dengan sesama pelajar dan pengajar dari seluruh penjuru nusantara dalam komunitas yang aktif.</p>
            <a href="#" class="read-more mt-3">Bergabung <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- Laporan -->
        <div class="col-md-4 animate-on-scroll animate-delay-3">
          <div class="glass-card feature-card h-100">
            <div class="feature-tag">Analitik</div>
            <div class="feature-icon-wrap">📊</div>
            <h4>Laporan Progres</h4>
            <p>Dashboard analitik cerdas untuk orang tua dan guru memantau perkembangan belajar siswa secara mendetail dengan visualisasi data yang intuitif.</p>
            <a href="#" class="read-more mt-3">Lihat Demo <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       NEWS & ARTICLES
  ═══════════════════════════════════════════ -->
  <section class="section" id="berita" style="background: var(--dark);">
    <div class="container">
      <div class="row align-items-end mb-5">
        <div class="col-lg-7">
          <div class="section-tag"><span class="dot"></span> Berita & Edukasi</div>
          <h2 class="section-title animate-on-scroll">
            Artikel <span class="highlight">Terkini</span>
          </h2>
          <div class="divider"></div>
          <p class="section-subtitle animate-on-scroll animate-delay-1">
            Tetap update dengan tren pendidikan digital, inovasi teknologi, dan kisah inspiratif dari seluruh Indonesia.
          </p>
        </div>
        <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 animate-on-scroll animate-delay-2">
          <a href="#" class="btn-outline-custom">Lihat Semua Artikel <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>

      <div class="row g-4">
        
        @foreach($semua_berita as $item)
        <div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-1">
          <article class="glass-card news-card h-100">
            <div class="card-img-wrap">
                @if($item->thumbnail)
              <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}" loading="lazy" />
              <div class="img-overlay"></div>
              @else
                <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=600&q=80" alt="AI dan Belajar" loading="lazy" />
              <div class="img-overlay"></div>
              @endif
            </div>
            <div class="card-body">
              <h5>{{ $item->title }}</h5>
              <p>{{ $item->content }}</p>
              
              <a href="{{ url('artikel/') }}/{{ $item->slug }}" class="read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       CTA BANNER
  ═══════════════════════════════════════════ -->
  <section class="section-sm cta-section">
    <div class="container text-center position-relative">
      <div class="animate-on-scroll">
        <div class="section-tag mx-auto mb-4" style="background:rgba(255,255,255,0.15); border-color:rgba(255,255,255,0.3); color:#fff;">
          <span class="dot" style="background:#fff;"></span>
          Mulai Sekarang — Gratis!
        </div>
        <h2 class="mb-3" style="color:#fff;">Siap Memulai Perjalanan<br/>Belajar Anda?</h2>
        <p class="mb-5" style="color:rgba(255,255,255,0.8); font-size:1.05rem; max-width:480px; margin:0 auto 2rem;">
          Bergabunglah dengan 120.000+ pelajar Indonesia yang sudah merasakan manfaat EduFuture ID.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="{{ url('/chatbot') }}" class="btn-primary-custom" style="background:white; color:#0A84FF;">
            <i class="bi bi-robot"></i> Coba EduBot Gratis
          </a>
          <a href="{{ url('/profil') }}" class="btn-outline-custom" style="border-color:rgba(255,255,255,0.5); color:#fff;">
            <i class="bi bi-info-circle"></i> Pelajari Lebih Lanjut
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection

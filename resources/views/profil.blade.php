@extends('layout')
@section('title', 'Profil')
@section('content')
  <!-- ═══════════════════════════════════════════
       PAGE HEADER
  ═══════════════════════════════════════════ -->
  <header class="page-header">
    <div class="page-header-glow"></div>
    <div class="container position-relative">
      <div class="breadcrumb-custom">
        <a href="{{ url('/') }}">Beranda</a>
        <span class="sep">/</span>
        <span>Profil</span>
      </div>
      <div class="section-tag"><span class="dot"></span> Tentang Kami</div>
      <h1 class="mt-2">Profil <span class="highlight">EduFuture ID</span></h1>
      <p class="mt-3">Mengenal lebih dalam platform inovasi digital pendidikan yang hadir untuk mewujudkan impian Indonesia Emas 2045.</p>
    </div>
  </header>

  <!-- ═══════════════════════════════════════════
       VISION & MISSION
  ═══════════════════════════════════════════ -->
  <section class="section" style="background: var(--dark-2);">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5 animate-on-scroll">
          <div class="section-tag"><span class="dot"></span> Arah & Tujuan</div>
          <h2 class="section-title mt-2">Visi & Misi<br /><span class="highlight">Kami</span></h2>
          <div class="divider"></div>
          <p style="color: var(--text-light); line-height: 1.85; font-size: 1rem;">
            EduFuture ID lahir dari keyakinan mendalam bahwa setiap anak Indonesia, di manapun mereka berada — dari ujung Sabang sampai Merauke — berhak mendapatkan akses pendidikan berkualitas yang merata dan berteknologi.
          </p>
          <p style="color: var(--text-muted); line-height: 1.85; font-size: 0.95rem; margin-top: 16px;">
            Kami percaya bahwa teknologi bukan hanya alat, melainkan jembatan menuju kesetaraan pendidikan nasional.
          </p>
          <div class="mt-4">
            <a href="contact.html" class="btn-primary-custom">
              <i class="bi bi-envelope"></i> Hubungi Kami
            </a>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="row g-4">
            <div class="col-12 animate-on-scroll animate-delay-1">
              <div class="glass-card vision-card">
                <div class="vision-icon">🔭</div>
                <h3>Visi Kami</h3>
                <p>Menjadi platform pendidikan digital nomor satu di Indonesia yang inklusif, inovatif, dan berbasis kecerdasan buatan — mempersiapkan generasi Indonesia yang cerdas, kreatif, dan berdaya saing global demi terwujudnya Indonesia Emas 2045.</p>
              </div>
            </div>
            <div class="col-12 animate-on-scroll animate-delay-2">
              <div class="glass-card vision-card">
                <div class="vision-icon">🎯</div>
                <h3>Misi Kami</h3>
                <p>Menghadirkan teknologi AI yang personal, menyediakan konten pendidikan berkualitas tinggi yang terkurasi, membangun ekosistem belajar kolaboratif, dan memastikan akses pendidikan digital yang merata di seluruh pelosok nusantara tanpa terkecuali.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       CORE VALUES
  ═══════════════════════════════════════════ -->
  <section class="section grid-bg" style="background: var(--dark);">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="section-tag"><span class="dot"></span> Nilai Inti</div>
          <h2 class="section-title mt-2 animate-on-scroll">Nilai yang<br /><span class="highlight">Kami Pegang</span></h2>
          <div class="divider"></div>
          <p style="color:var(--text-light); line-height:1.8;" class="animate-on-scroll animate-delay-1">
            Setiap keputusan dan produk yang kami bangun selalu berakar pada empat nilai fundamental yang menjadi jangkar identitas EduFuture ID.
          </p>
          <div class="mt-4 animate-on-scroll animate-delay-2">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" alt="Tim EduFuture" class="img-fluid" style="border-radius: var(--radius-lg); border: 1px solid var(--glass-border);" loading="lazy" />
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <div class="animate-on-scroll animate-delay-1">
            <div class="value-item">
              <div class="value-num">01</div>
              <div>
                <h5>Inklusivitas</h5>
                <p>Kami percaya pendidikan adalah hak setiap anak bangsa. Platform kami dirancang agar dapat diakses oleh siapa saja, termasuk penyandang disabilitas.</p>
              </div>
            </div>
          </div>
          <div class="animate-on-scroll animate-delay-2">
            <div class="value-item">
              <div class="value-num">02</div>
              <div>
                <h5>Inovasi Berkelanjutan</h5>
                <p>Kami terus berinovasi dengan mengadopsi teknologi terkini seperti Generative AI, AR/VR, dan analitik data untuk meningkatkan pengalaman belajar.</p>
              </div>
            </div>
          </div>
          <div class="animate-on-scroll animate-delay-3">
            <div class="value-item">
              <div class="value-num">03</div>
              <div>
                <h5>Integritas Data</h5>
                <p>Privasi dan keamanan data pengguna adalah prioritas utama. Semua data dienkripsi dan tidak pernah dijual kepada pihak ketiga.</p>
              </div>
            </div>
          </div>
          <div class="animate-on-scroll animate-delay-3">
            <div class="value-item">
              <div class="value-num">04</div>
              <div>
                <h5>Dampak Sosial</h5>
                <p>Setiap fitur yang kami bangun diukur dari dampak nyatanya terhadap peningkatan kualitas pendidikan dan kesejahteraan masyarakat Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       TEAM SECTION
  ═══════════════════════════════════════════ -->
  <section class="section" style="background: var(--dark-2);">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag mx-auto"><span class="dot"></span> Orang-Orang Hebat</div>
        <h2 class="section-title mt-2 animate-on-scroll">Tim <span class="highlight">Pendiri</span></h2>
        <div class="divider center"></div>
        <p class="section-subtitle mx-auto text-center animate-on-scroll animate-delay-1">
          Bertemu dengan para visioner dan pemimpin yang mendedikasikan diri untuk merevolusi pendidikan Indonesia.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Member 1 -->
        <div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-1">
          <div class="glass-card team-card h-100">
            <div class="team-avatar">
              <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=200&h=200&fit=crop&q=80" alt="Arif Wicaksono" loading="lazy" />
            </div>
            <h5>Nihat Zidnilkarim</h5>
            <div class="team-role">🚀 Pendiri & CEO</div>
            <p>Mantan peneliti AI di BRIN dengan 12 tahun pengalaman di bidang teknologi pendidikan. Lulusan ITB dan Stanford University.</p>
            <div class="social-links justify-content-center mt-3">
              <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>
        </div>
        <!-- Member 2 -->
        <div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-2">
          <div class="glass-card team-card h-100">
            <div class="team-avatar">
              <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=200&h=200&fit=crop&q=80" alt="Sari Pertiwi" loading="lazy" />
            </div>
            <h5>Sari Pertiwi</h5>
            <div class="team-role">⚙️ Co-Founder & CTO</div>
            <p>Insinyur perangkat lunak senior dengan spesialisasi Machine Learning dan sistem cloud skala besar. Lulusan Universitas Indonesia.</p>
            <div class="social-links justify-content-center mt-3">
              <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="social-btn" aria-label="GitHub"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
        <!-- Member 3 -->
        <div class="col-lg-4 col-md-6 animate-on-scroll animate-delay-3">
          <div class="glass-card team-card h-100">
            <div class="team-avatar">
              <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop&q=80" alt="Budi Santoso" loading="lazy" />
            </div>
            <h5>Budi Santoso</h5>
            <div class="team-role">📖 Kepala Kurikulum</div>
            <p>Mantan kepala sekolah dan konsultan Kemendikbud dengan passion di bidang inovasi kurikulum berbasis kompetensi abad ke-21.</p>
            <div class="social-links justify-content-center mt-3">
              <a href="#" class="social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       HISTORY / TIMELINE
  ═══════════════════════════════════════════ -->
  <section class="section grid-bg" style="background: var(--dark);">
    <div class="container">
      <div class="row g-5 align-items-start">
        <div class="col-lg-4 animate-on-scroll">
          <div class="section-tag"><span class="dot"></span> Perjalanan Kami</div>
          <h2 class="section-title mt-2">Sejarah<br /><span class="highlight">Inovasi</span></h2>
          <div class="divider"></div>
          <p style="color:var(--text-light); line-height:1.8; font-size:0.95rem;">
            Dari sebuah garasi kecil di Bandung hingga menjadi platform edukasi yang dipercaya jutaan pelajar Indonesia — ini adalah kisah perjalanan kami.
          </p>
          <div class="mt-4">
            <div class="mini-stat-item" style="display:inline-block; padding:16px 24px;">
              <div class="val">3 Tahun</div>
              <div class="desc">Perjalanan Inovasi</div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <div class="timeline">
            <div class="timeline-item animate-on-scroll animate-delay-1">
              <div class="timeline-year">🌱 2022</div>
              <h5>Lahirnya Gagasan</h5>
              <p>Arif Wicaksono dan Sari Pertiwi bertemu dalam sebuah hackathon pendidikan di ITB. Kesamaan visi mendorong mereka membangun prototipe pertama EduFuture ID dalam 72 jam, berhasil memenangkan penghargaan inovasi terbaik.</p>
            </div>
            <div class="timeline-item animate-on-scroll animate-delay-1">
              <div class="timeline-year">🚀 Maret 2023</div>
              <h5>Peluncuran Beta & Pendanaan Awal</h5>
              <p>Platform beta diluncurkan dengan 500 pengguna awal dari 5 sekolah percontohan di Bandung dan Jakarta. EduFuture ID berhasil mendapatkan pendanaan awal sebesar Rp 5 miliar dari investor lokal dan program inkubasi Kemenristek.</p>
            </div>
            <div class="timeline-item animate-on-scroll animate-delay-2">
              <div class="timeline-year">📈 2023 — 2024</div>
              <h5>Ekspansi Nasional & Fitur AI</h5>
              <p>Bergabungnya Budi Santoso sebagai Kepala Kurikulum memperkuat konten pembelajaran. Diluncurkan fitur AI Learning pertama dan Kelas Virtual. Pengguna aktif melonjak menembus 50.000 dari 15 provinsi Indonesia.</p>
            </div>
            <div class="timeline-item animate-on-scroll animate-delay-2">
              <div class="timeline-year">🏆 2025</div>
              <h5>Penghargaan & Kemitraan Strategis</h5>
              <p>Meraih penghargaan "EduTech Terbaik Indonesia" dari Kemdikbudristek. Menjalin kemitraan dengan Kemendikbud untuk program digitalisasi 1.000 sekolah di daerah 3T dan mendapatkan Seri A funding sebesar $3 juta.</p>
            </div>
            <div class="timeline-item animate-on-scroll animate-delay-3">
              <div class="timeline-year">🌟 2026 — Kini</div>
              <h5>Platform Terdepan Indonesia</h5>
              <p>EduFuture ID kini melayani lebih dari 120.000 pelajar aktif di 34 provinsi. Meluncurkan EduBot (AI Chatbot Edukasi) dan terus berinovasi menuju visi pendidikan Indonesia Emas 2045 yang merata dan berkualitas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       CTA BANNER
  ═══════════════════════════════════════════ -->
  <section class="section-sm cta-section">
    <div class="container text-center position-relative">
      <div class="animate-on-scroll">
        <h2 class="mb-3" style="color:#fff;">Ingin Tahu Lebih Banyak?</h2>
        <p class="mb-5" style="color:rgba(255,255,255,0.8); max-width:440px; margin:0 auto 2rem;">
          Hubungi tim kami atau coba langsung EduBot AI untuk pengalaman belajar yang sesungguhnya.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="contact.html" class="btn-primary-custom" style="background:white; color:#0A84FF;">
            <i class="bi bi-envelope"></i> Hubungi Kami
          </a>
          <a href="chatbot.html" class="btn-outline-custom" style="border-color:rgba(255,255,255,0.5); color:#fff;">
            <i class="bi bi-robot"></i> Coba EduBot
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
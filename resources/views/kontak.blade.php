@extends('layout')
@section('title', 'kontak')
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
        <span>Kontak</span>
      </div>
      <div class="section-tag"><span class="dot"></span> Hubungi Kami</div>
      <h1 class="mt-2">Kami Siap<br /><span class="highlight">Mendengar Anda</span></h1>
      <p class="mt-3">Punya pertanyaan, saran, atau ingin berkolaborasi? Tim kami selalu siap membantu Anda.</p>
    </div>
  </header>

  <!-- ═══════════════════════════════════════════
       CONTACT SECTION
  ═══════════════════════════════════════════ -->
  <section class="section" style="background: var(--dark-2);">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- Contact Form -->
        <div class="col-lg-7 animate-on-scroll">
          <div class="glass-card contact-form-wrap">
            <div class="section-tag mb-4"><span class="dot"></span> Kirim Pesan</div>
            <h3 style="font-size:1.5rem; letter-spacing:-0.5px; margin-bottom:8px; font-family:var(--font-display);">
              Tulis Pesan <span class="highlight">untuk Kami</span>
            </h3>
            <p style="color:var(--text-muted); font-size:0.92rem; margin-bottom:32px;">
              Isi formulir di bawah ini dan tim kami akan merespons dalam 1×24 jam kerja.
            </p>

            <form id="contactForm" novalidate>
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactName">
                      <i class="bi bi-person me-1"></i> Nama Lengkap *
                    </label>
                    <input
                      type="text"
                      id="contactName"
                      name="name"
                      class="form-control-custom"
                      placeholder="Contoh: Budi Santoso"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactEmail">
                      <i class="bi bi-envelope me-1"></i> Alamat Email *
                    </label>
                    <input
                      type="email"
                      id="contactEmail"
                      name="email"
                      class="form-control-custom"
                      placeholder="budi@email.com"
                      required
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactPhone">
                      <i class="bi bi-telephone me-1"></i> Nomor Telepon
                    </label>
                    <input
                      type="tel"
                      id="contactPhone"
                      name="phone"
                      class="form-control-custom"
                      placeholder="+62 812 3456 7890"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactRole">
                      <i class="bi bi-briefcase me-1"></i> Saya Adalah
                    </label>
                    <select id="contactRole" name="role" class="form-control-custom select-custom">
                      <option value="">Pilih peran Anda...</option>
                      <option value="pelajar">Pelajar / Mahasiswa</option>
                      <option value="guru">Guru / Dosen</option>
                      <option value="ortu">Orang Tua</option>
                      <option value="institusi">Institusi Pendidikan</option>
                      <option value="partner">Mitra Bisnis</option>
                      <option value="media">Jurnalis / Media</option>
                      <option value="lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactSubject">
                      <i class="bi bi-tag me-1"></i> Subjek Pesan *
                    </label>
                    <select id="contactSubject" name="subject" class="form-control-custom select-custom" required>
                      <option value="">Pilih topik pertanyaan...</option>
                      <option value="info">Informasi Umum Platform</option>
                      <option value="teknis">Bantuan Teknis / Bug</option>
                      <option value="paket">Paket & Harga Berlangganan</option>
                      <option value="kemitraan">Kemitraan & Kolaborasi</option>
                      <option value="kerjasama-sekolah">Kerja Sama Institusi</option>
                      <option value="konten">Permintaan Konten / Kurikulum</option>
                      <option value="lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group-custom">
                    <label class="form-label-custom" for="contactMessage">
                      <i class="bi bi-chat-left-text me-1"></i> Pesan Anda *
                    </label>
                    <textarea
                      id="contactMessage"
                      name="message"
                      class="form-control-custom"
                      placeholder="Tuliskan pesan Anda di sini. Semakin detail, semakin mudah kami membantu..."
                      rows="5"
                      required
                    ></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div style="display:flex; align-items:flex-start; gap:12px; padding:16px; background:rgba(10,132,255,0.06); border:1px solid rgba(10,132,255,0.15); border-radius:10px; margin-bottom:8px;">
                    <input type="checkbox" id="privacyCheck" style="margin-top:3px; accent-color:var(--primary);" required />
                    <label for="privacyCheck" style="color:var(--text-light); font-size:0.88rem; cursor:pointer;">
                      Saya menyetujui <a href="#" style="color:var(--primary-light);">Kebijakan Privasi</a> dan bersedia dihubungi oleh tim EduFuture ID terkait pesan ini.
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn-primary-custom w-100 justify-content-center" style="padding: 16px 32px; font-size: 1rem;">
                    <i class="bi bi-send-fill me-2"></i>
                    Kirim Pesan Sekarang
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-5 animate-on-scroll animate-delay-2">
          <div class="glass-card contact-info-card mb-4">
            <div class="section-tag mb-4"><span class="dot"></span> Info Kontak</div>
            <h3 style="font-size:1.4rem; margin-bottom:24px; font-family:var(--font-display);">
              Temukan <span class="highlight">Kami</span>
            </h3>

            <div class="info-item">
              <div class="info-icon">📍</div>
              <div>
                <h6>Alamat Kantor</h6>
                <p>Gedung EduTech Tower, Lantai 12<br />Jl. HR Rasuna Said Kav C-22<br />Kuningan, Jakarta Selatan 12940</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">📧</div>
              <div>
                <h6>Email Resmi</h6>
                <p>hello@edufuture.id<br />support@edufuture.id</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">📞</div>
              <div>
                <h6>Telepon & WhatsApp</h6>
                <p>+62 21 1234 5678<br />+62 812 9999 0000 (WA)</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">🕐</div>
              <div>
                <h6>Jam Operasional</h6>
                <p>Senin – Jumat: 08.00 – 17.00 WIB<br />Sabtu: 09.00 – 13.00 WIB</p>
              </div>
            </div>

            <!-- Map Placeholder -->
            <div class="map-placeholder">
              <div class="map-grid"></div>
              <div class="map-pin">📌</div>
              <div class="map-label">EduFuture ID — Jakarta Selatan</div>
              <div style="font-size:0.75rem; color:var(--text-muted); position:relative; z-index:1;">Gedung EduTech Tower, Kuningan</div>
            </div>
          </div>

          <!-- Social Links Card -->
          <div class="glass-card p-4">
            <h6 style="font-family:var(--font-display); font-weight:700; margin-bottom:16px; color:var(--text-light); letter-spacing:0.5px; text-transform:uppercase; font-size:0.8rem;">
              Ikuti Kami
            </h6>
            <div class="d-flex gap-2 flex-wrap">
              <a href="#" class="social-btn" aria-label="Instagram" style="width:auto; padding:0 16px; gap:8px; font-size:0.88rem;">
                <i class="bi bi-instagram"></i> Instagram
              </a>
              <a href="#" class="social-btn" aria-label="Twitter/X" style="width:auto; padding:0 16px; gap:8px; font-size:0.88rem;">
                <i class="bi bi-twitter-x"></i> Twitter
              </a>
              <a href="#" class="social-btn" aria-label="YouTube" style="width:auto; padding:0 16px; gap:8px; font-size:0.88rem;">
                <i class="bi bi-youtube"></i> YouTube
              </a>
              <a href="#" class="social-btn" aria-label="LinkedIn" style="width:auto; padding:0 16px; gap:8px; font-size:0.88rem;">
                <i class="bi bi-linkedin"></i> LinkedIn
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       FAQ QUICK SECTION
  ═══════════════════════════════════════════ -->
  <section class="section grid-bg" style="background: var(--dark);">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag mx-auto"><span class="dot"></span> Pertanyaan Umum</div>
        <h2 class="section-title mt-2 animate-on-scroll">FAQ — <span class="highlight">Pertanyaan</span><br />yang Sering Diajukan</h2>
        <div class="divider center"></div>
      </div>
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="value-item animate-on-scroll">
            <div class="value-num">❓</div>
            <div>
              <h5>Apakah EduFuture ID gratis?</h5>
              <p>Ya! Tersedia paket Gratis dengan akses 50+ kursus dasar. Paket Premium mulai Rp 79.000/bulan memberikan akses penuh semua fitur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="value-item animate-on-scroll animate-delay-1">
            <div class="value-num">❓</div>
            <div>
              <h5>Berapa lama respons tim support?</h5>
              <p>Tim kami akan merespons email dalam 1×24 jam kerja. Untuk pertanyaan cepat, gunakan EduBot AI yang tersedia 24/7.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="value-item animate-on-scroll animate-delay-1">
            <div class="value-num">❓</div>
            <div>
              <h5>Apakah tersedia untuk institusi sekolah?</h5>
              <p>Tentu! Kami memiliki paket khusus untuk institusi pendidikan dengan fitur manajemen kelas, laporan progres siswa, dan harga spesial.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="value-item animate-on-scroll animate-delay-2">
            <div class="value-num">❓</div>
            <div>
              <h5>Bagaimana cara berkolaborasi dengan EduFuture ID?</h5>
              <p>Kami sangat terbuka untuk kemitraan! Kirimkan email ke partnership@edufuture.id atau gunakan formulir kontak di atas dengan topik "Kemitraan".</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
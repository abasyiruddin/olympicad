@extends('layout')
@section('title', 'ChatBot')
@section('content')
  
  <!-- ═══════════════════════════════════════════
       PAGE HEADER
  ═══════════════════════════════════════════ -->
  <header class="page-header" style="padding-bottom: 48px;">
    <div class="page-header-glow"></div>
    <div class="container position-relative">
      <div class="breadcrumb-custom">
        <a href="{{ url('/') }}">Beranda</a>
        <span class="sep">/</span>
        <span>EduBot AI</span>
      </div>
      <div class="section-tag"><span class="dot"></span> Fitur AI Chat</div>
      <h1 class="mt-2"><span class="highlight">EduBot AI</span> — Asisten<br />Belajar Cerdas Anda</h1>
      <p class="mt-3">Tanyakan apa saja tentang materi pelajaran, fitur platform, atau info pendidikan kepada EduBot.</p>
    </div>
  </header>

  <!-- ═══════════════════════════════════════════
       CHATBOT SECTION
  ═══════════════════════════════════════════ -->
  <section class="section" style="background: var(--dark-2);">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- Chat Interface -->
        <div class="col-lg-8 animate-on-scroll">
          <div class="chatbot-wrap">
            <div class="glass-card" style="overflow:hidden;">

              <!-- Chat Header -->
              <div class="chat-header">
                <div class="bot-avatar">🤖</div>
                <div class="bot-info">
                  <h6>EduBot AI</h6>
                  <div class="bot-status">Online · Siap Membantu</div>
                </div>
                <div class="ms-auto d-flex gap-2">
                  <button
                    id="clearChatBtn"
                    title="Hapus riwayat chat"
                    style="background:rgba(255,255,255,0.05); border:1px solid var(--glass-border); color:var(--text-muted); width:36px; height:36px; border-radius:8px; cursor:pointer; transition:all 0.2s; display:flex; align-items:center; justify-content:center; font-size:1rem;"
                    aria-label="Hapus chat"
                  >
                    <i class="bi bi-trash3"></i>
                  </button>
                </div>
              </div>

              <!-- Chat Window -->
              <div id="chatWindow" class="chat-window">

                <!-- Welcome Message -->
                <div class="msg bot">
                  <div class="msg-avatar">🤖</div>
                  <div>
                    <div class="msg-bubble">
                      👋 Halo! Saya <strong>EduBot</strong> — asisten digital cerdas dari EduFuture ID.<br /><br />
                      Ada yang bisa saya bantu mengenai <strong>materi pelajaran</strong>, <strong>fitur platform</strong>, atau <strong>info lainnya?</strong>
                    </div>
                    <div class="msg-time">Sekarang</div>
                  </div>
                </div>

                <!-- Second Welcome Message -->
                <div class="msg bot">
                  <div class="msg-avatar">🤖</div>
                  <div>
                    <div class="msg-bubble">
                      💡 <em>Tips:</em> Anda bisa bertanya tentang fitur AI Learning, kelas virtual, cara mendaftar, harga paket, atau topik pendidikan lainnya!
                    </div>
                    <div class="msg-time">Sekarang</div>
                  </div>
                </div>

              </div>

              <!-- Suggestions -->
              <div class="chat-input-area">
                <div class="chat-suggestions">
                  <button class="suggestion-chip">Cara daftar?</button>
                  <button class="suggestion-chip">Fitur AI Learning</button>
                  <button class="suggestion-chip">Harga paket</button>
                  <button class="suggestion-chip">Kelas virtual</button>
                  <button class="suggestion-chip">Tentang EduFuture</button>
                  <button class="suggestion-chip">Belajar coding</button>
                </div>
                <div class="chat-input-row">
                  <input
                    type="text"
                    id="chatInput"
                    placeholder="Tulis pesan Anda... (Enter untuk kirim)"
                    autocomplete="off"
                    aria-label="Tulis pesan"
                  />
                  <button class="send-btn" id="sendBtn" aria-label="Kirim pesan">
                    <i class="bi bi-send-fill"></i>
                  </button>
                </div>
                <div style="text-align:center; margin-top:12px; font-size:0.72rem; color:var(--text-muted); font-family:var(--font-display);">
                  🔒 Percakapan Anda aman dan terenkripsi · EduBot v2.0
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Sidebar Info -->
        <div class="col-lg-4 animate-on-scroll animate-delay-2">

          <!-- Capabilities Card -->
          <div class="glass-card p-4 mb-4">
            <div class="section-tag mb-3"><span class="dot"></span> Kemampuan EduBot</div>
            <h5 style="font-family:var(--font-display); font-size:1.05rem; margin-bottom:20px;">Apa yang Bisa Ditanyakan?</h5>

            <div style="display:flex; flex-direction:column; gap:12px;">
              <div style="display:flex; gap:14px; align-items:flex-start; padding:14px; background:rgba(10,132,255,0.07); border:1px solid rgba(10,132,255,0.15); border-radius:10px;">
                <span style="font-size:1.3rem;">📚</span>
                <div>
                  <div style="font-family:var(--font-display); font-weight:600; font-size:0.88rem; margin-bottom:3px;">Materi Pelajaran</div>
                  <div style="font-size:0.8rem; color:var(--text-muted);">Matematika, Sains, Bahasa, Sejarah, dll.</div>
                </div>
              </div>
              <div style="display:flex; gap:14px; align-items:flex-start; padding:14px; background:rgba(0,201,177,0.07); border:1px solid rgba(0,201,177,0.15); border-radius:10px;">
                <span style="font-size:1.3rem;">🤖</span>
                <div>
                  <div style="font-family:var(--font-display); font-weight:600; font-size:0.88rem; margin-bottom:3px;">Fitur Platform</div>
                  <div style="font-size:0.8rem; color:var(--text-muted);">AI Learning, Kelas Virtual, Perpustakaan.</div>
                </div>
              </div>
              <div style="display:flex; gap:14px; align-items:flex-start; padding:14px; background:rgba(10,132,255,0.07); border:1px solid rgba(10,132,255,0.15); border-radius:10px;">
                <span style="font-size:1.3rem;">💳</span>
                <div>
                  <div style="font-family:var(--font-display); font-weight:600; font-size:0.88rem; margin-bottom:3px;">Harga & Paket</div>
                  <div style="font-size:0.8rem; color:var(--text-muted);">Info langganan dan cara mendaftar.</div>
                </div>
              </div>
              <div style="display:flex; gap:14px; align-items:flex-start; padding:14px; background:rgba(0,201,177,0.07); border:1px solid rgba(0,201,177,0.15); border-radius:10px;">
                <span style="font-size:1.3rem;">📞</span>
                <div>
                  <div style="font-family:var(--font-display); font-weight:600; font-size:0.88rem; margin-bottom:3px;">Info Kontak</div>
                  <div style="font-size:0.8rem; color:var(--text-muted);">Alamat, email, dan jam operasional.</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Stats Card -->
          <div class="glass-card p-4 mb-4">
            <h6 style="font-family:var(--font-display); font-size:0.78rem; font-weight:600; text-transform:uppercase; letter-spacing:1px; color:var(--text-muted); margin-bottom:20px;">Statistik EduBot</h6>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
              <div class="mini-stat-item">
                <div class="val">98%</div>
                <div class="desc">Kepuasan Pengguna</div>
              </div>
              <div class="mini-stat-item">
                <div class="val">24/7</div>
                <div class="desc">Selalu Online</div>
              </div>
              <div class="mini-stat-item">
                <div class="val">&lt;1s</div>
                <div class="desc">Waktu Respons</div>
              </div>
              <div class="mini-stat-item">
                <div class="val">10+</div>
                <div class="desc">Topik Tersedia</div>
              </div>
            </div>
          </div>

          <!-- Human Support Card -->
          <div class="glass-card p-4">
            <div style="display:flex; gap:14px; align-items:center; margin-bottom:16px;">
              <div style="width:44px; height:44px; background:rgba(0,201,177,0.1); border:1px solid rgba(0,201,177,0.25); border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0;">🧑‍💼</div>
              <div>
                <div style="font-family:var(--font-display); font-weight:700; font-size:0.95rem;">Butuh Bantuan Manusia?</div>
                <div style="font-size:0.8rem; color:var(--text-muted);">Tim support kami siap membantu</div>
              </div>
            </div>
            <p style="font-size:0.88rem; color:var(--text-light); line-height:1.65; margin-bottom:16px;">
              Jika EduBot belum bisa menjawab pertanyaan Anda, hubungi tim support kami langsung.
            </p>
            <a href="contact.html" class="btn-outline-custom" style="width:100%; justify-content:center; padding:12px;">
              <i class="bi bi-envelope"></i> Hubungi Support
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
       HOW IT WORKS
  ═══════════════════════════════════════════ -->
  <section class="section grid-bg" style="background: var(--dark);">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-tag mx-auto"><span class="dot"></span> Cara Kerja</div>
        <h2 class="section-title mt-2 animate-on-scroll">Bagaimana <span class="highlight">EduBot AI</span><br />Bekerja?</h2>
        <div class="divider center"></div>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 text-center animate-on-scroll animate-delay-1">
          <div class="glass-card feature-card">
            <div class="feature-icon-wrap" style="margin:0 auto 20px; font-size:1.6rem;">1️⃣</div>
            <h4>Tulis Pertanyaan</h4>
            <p>Ketik pertanyaan Anda seputar materi pelajaran atau platform EduFuture ID di kolom chat.</p>
          </div>
        </div>
        <div class="col-md-4 text-center animate-on-scroll animate-delay-2">
          <div class="glass-card feature-card">
            <div class="feature-icon-wrap" style="margin:0 auto 20px; font-size:1.6rem;">⚡</div>
            <h4>AI Memproses</h4>
            <p>EduBot menganalisis pertanyaan Anda menggunakan teknologi Natural Language Processing (NLP) terkini.</p>
          </div>
        </div>
        <div class="col-md-4 text-center animate-on-scroll animate-delay-3">
          <div class="glass-card feature-card">
            <div class="feature-icon-wrap" style="margin:0 auto 20px; font-size:1.6rem;">✅</div>
            <h4>Terima Jawaban</h4>
            <p>Dapatkan jawaban akurat dan personal dalam hitungan detik, tersedia kapan saja dan di mana saja.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
/* ============================================================
   EduFuture ID — Main Script
   ============================================================ */

/* ─── Navbar Scroll Effect ─── */
const navbar = document.querySelector('.navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  });
}

/* ─── Active Nav Link ─── */
(function setActiveNav() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });
})();

/* ─── Scroll-triggered Animations ─── */
(function initScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
})();

/* ─── Animated Counter ─── */
(function initCounters() {
  const counters = document.querySelectorAll('[data-count]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.count, 10);
        const suffix = el.dataset.suffix || '';
        const duration = 1800;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
          current += step;
          if (current >= target) {
            el.textContent = target.toLocaleString() + suffix;
            clearInterval(timer);
          } else {
            el.textContent = Math.floor(current).toLocaleString() + suffix;
          }
        }, 16);

        observer.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));
})();

/* ─── Contact Form Handler ─── */
(function initContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;

    // Validate
    let valid = true;
    form.querySelectorAll('[required]').forEach(field => {
      if (!field.value.trim()) {
        field.style.borderColor = '#ff4d6d';
        valid = false;
        setTimeout(() => { field.style.borderColor = ''; }, 2000);
      }
    });
    if (!valid) return;

    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Mengirim...';
    btn.disabled = true;

    setTimeout(() => {
      btn.innerHTML = '✅ Pesan Terkirim!';
      btn.style.background = 'linear-gradient(135deg, #00C9B1, #009E8C)';
      form.reset();

      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.disabled = false;
      }, 3500);
    }, 1800);
  });
})();

/* ─── Chatbot Logic ─── */
(function initChatbot() {
  const chatWindow = document.getElementById('chatWindow');
  const chatInput = document.getElementById('chatInput');
  const sendBtn = document.getElementById('sendBtn');

  if (!chatWindow || !chatInput || !sendBtn) return;

  /* ── Bot responses database ── */
  const botResponses = {
    greet: {
      keywords: ['hai', 'halo', 'hi', 'hello', 'selamat', 'pagi', 'siang', 'malam', 'hei'],
      replies: [
        'Halo! 👋 Senang bertemu dengan Anda. Saya EduBot, asisten digital EduFuture ID. Ada yang bisa saya bantu hari ini?',
        'Hai! Selamat datang di EduFuture ID. Saya siap membantu pertanyaan Anda seputar pendidikan digital. 😊',
      ]
    },
    ai: {
      keywords: ['ai', 'kecerdasan buatan', 'artificial intelligence', 'machine learning', 'fitur ai', 'teknologi ai'],
      replies: [
        'Fitur AI kami menggunakan teknologi terkini untuk menyesuaikan materi pembelajaran dengan gaya belajar setiap siswa. 🤖 Dengan analisis data, AI kami dapat mengidentifikasi kelemahan dan kekuatan belajar Anda secara personal.',
        'Teknologi AI di platform kami membantu guru membuat konten pembelajaran yang adaptif, serta memberikan feedback otomatis kepada siswa secara real-time. ✨',
      ]
    },
    kelas: {
      keywords: ['kelas', 'virtual', 'belajar', 'kursus', 'pelajaran', 'materi', 'konten', 'kurikulum'],
      replies: [
        'Kelas Virtual kami tersedia 24/7 dan mencakup lebih dari 500 mata pelajaran. 📚 Mulai dari SD, SMP, SMA, hingga pendidikan tinggi dan pelatihan profesional.',
        'Di EduFuture ID, Anda bisa belajar kapan saja dan di mana saja! Kelas kami mencakup matematika, sains, bahasa, coding, seni, dan masih banyak lagi. 🎓',
      ]
    },
    coding: {
      keywords: ['coding', 'pemrograman', 'code', 'program', 'developer', 'python', 'javascript', 'web'],
      replies: [
        'Kelas coding kami dirancang khusus dari level pemula hingga mahir! 💻 Kami menyediakan kursus Python, JavaScript, HTML/CSS, Flutter, dan banyak bahasa pemrograman lainnya.',
        'Belajar coding di EduFuture ID sangat menyenangkan! Kami menggunakan metode project-based learning, jadi Anda langsung praktek membuat aplikasi nyata. 🚀',
      ]
    },
    daftar: {
      keywords: ['daftar', 'registrasi', 'bergabung', 'sign up', 'mulai', 'cara', 'bagaimana', 'mendaftar', 'akun'],
      replies: [
        'Untuk mendaftar di EduFuture ID sangat mudah! 1️⃣ Klik tombol "Mulai Belajar" di halaman utama. 2️⃣ Isi form pendaftaran. 3️⃣ Verifikasi email. 4️⃣ Selesai! Gratis untuk akun basic.',
        'Proses pendaftaran hanya memakan waktu 2 menit. Kunjungi halaman utama kami dan klik "Mulai Belajar". Tersedia paket gratis dan premium untuk akses fitur lengkap! 🎉',
      ]
    },
    harga: {
      keywords: ['harga', 'biaya', 'bayar', 'gratis', 'premium', 'paket', 'langganan', 'berapa'],
      replies: [
        'EduFuture ID menyediakan paket Gratis (akses 50+ kursus dasar), Paket Pelajar Rp 79.000/bulan, dan Paket Pro Rp 149.000/bulan untuk akses penuh semua fitur AI dan kelas premium. 💳',
        'Kabar baiknya, ada paket GRATIS selamanya! Untuk fitur premium termasuk AI tutor, perpustakaan digital lengkap, dan sertifikat resmi, tersedia mulai dari Rp 79.000/bulan. 🌟',
      ]
    },
    about: {
      keywords: ['tentang', 'profil', 'visi', 'misi', 'tim', 'pendiri', 'perusahaan', 'siapa'],
      replies: [
        'EduFuture ID didirikan pada 2022 dengan misi mewujudkan pendidikan berkualitas untuk seluruh pelajar Indonesia. Kami dipimpin oleh tim berpengalaman di bidang teknologi dan pendidikan. 🇮🇩',
        'Tim EduFuture ID terdiri dari para pendidik berpengalaman, engineer AI, dan desainer UX yang berdedikasi untuk merevolusi pendidikan Indonesia. Kunjungi halaman Profil untuk info selengkapnya!',
      ]
    },
    kontak: {
      keywords: ['kontak', 'hubungi', 'email', 'telepon', 'alamat', 'bantuan', 'support', 'cs'],
      replies: [
        'Anda bisa menghubungi kami melalui: 📧 Email: hello@edufuture.id | 📞 Telepon: +62 21 1234 5678 | 📍 Gedung EduTech Tower Lt. 12, Jakarta Selatan. Atau gunakan form di halaman Kontak!',
        'Tim support kami siap membantu Senin-Jumat pukul 08.00-17.00 WIB. Untuk respons lebih cepat, gunakan fitur live chat atau email ke hello@edufuture.id 🕐',
      ]
    },
    terima_kasih: {
      keywords: ['terima kasih', 'thanks', 'makasih', 'thx', 'tq', 'terimakasih'],
      replies: [
        'Sama-sama! 😊 Senang bisa membantu. Jika ada pertanyaan lain, jangan ragu untuk bertanya ya!',
        'Dengan senang hati! 🌟 Semangat terus dalam belajar. Ada hal lain yang ingin Anda ketahui?',
      ]
    },
    default: [
      'Terima kasih atas pertanyaan Anda! Saya sedang memproses informasi terkait hal tersebut. Untuk jawaban lebih detail, Anda bisa menghubungi tim kami di hello@edufuture.id 💬',
      'Pertanyaan yang menarik! 🤔 Fitur AI kami terus berkembang. Saat ini saya merekomendasikan Anda melihat halaman FAQ atau menghubungi tim support kami untuk info lebih lengkap.',
      'Hm, saya belum memiliki informasi spesifik tentang itu. Coba tanyakan hal lain seputar kelas, AI Learning, atau pendaftaran — saya siap membantu! 😊',
    ]
  };

  function getTime() {
    const now = new Date();
    return now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
  }

  function getRandomReply(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  function getBotReply(input) {
    const lower = input.toLowerCase().trim();
    for (const [, data] of Object.entries(botResponses)) {
      if (Array.isArray(data)) continue;
      if (data.keywords.some(kw => lower.includes(kw))) {
        return getRandomReply(data.replies);
      }
    }
    return getRandomReply(botResponses.default);
  }

  function appendMessage(text, sender) {
    const isBot = sender === 'bot';
    const msgEl = document.createElement('div');
    msgEl.className = `msg ${sender}`;
    const avatarIcon = isBot ? '🤖' : '👤';
    msgEl.innerHTML = `
      <div class="msg-avatar">${avatarIcon}</div>
      <div>
        <div class="msg-bubble">${text}</div>
        <div class="msg-time">${getTime()}</div>
      </div>
    `;
    chatWindow.appendChild(msgEl);
    scrollToBottom();
  }

  function showTypingIndicator() {
    const el = document.createElement('div');
    el.className = 'msg bot';
    el.id = 'typingIndicator';
    el.innerHTML = `
      <div class="msg-avatar">🤖</div>
      <div>
        <div class="typing-indicator">
          <div class="typing-dot"></div>
          <div class="typing-dot"></div>
          <div class="typing-dot"></div>
        </div>
      </div>
    `;
    chatWindow.appendChild(el);
    scrollToBottom();
  }

  function removeTypingIndicator() {
    const el = document.getElementById('typingIndicator');
    if (el) el.remove();
  }

  function scrollToBottom() {
    requestAnimationFrame(() => {
      chatWindow.scrollTop = chatWindow.scrollHeight;
    });
  }

  function handleSend() {
    const text = chatInput.value.trim();
    if (!text) return;

    appendMessage(text, 'user');
    chatInput.value = '';
    chatInput.focus();

    sendBtn.disabled = true;
    showTypingIndicator();

    const delay = 900 + Math.random() * 700;
    setTimeout(() => {
      removeTypingIndicator();
      const reply = getBotReply(text);
      appendMessage(reply, 'bot');
      sendBtn.disabled = false;
    }, delay);
  }

  sendBtn.addEventListener('click', handleSend);
  chatInput.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      handleSend();
    }
  });

  /* Suggestion chips */
  document.querySelectorAll('.suggestion-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      chatInput.value = chip.textContent.trim();
      handleSend();
    });
  });

  /* Initial scroll */
  scrollToBottom();
})();

/* ─── Smooth close navbar on link click (mobile) ─── */
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', () => {
    const collapse = document.querySelector('.navbar-collapse');
    if (collapse && collapse.classList.contains('show')) {
      const toggler = document.querySelector('.navbar-toggler');
      if (toggler) toggler.click();
    }
  });
});

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO -->
<section class="home-hero">
  <div class="overlay"></div>

  <div class="hero-box">
    <div class="hero-text">
      <h2>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?</h2>
    </div>
    <a href="{{ route('tentang') }}" class="btn hero-btn">SELENGKAPNYA</a>
  </div>
</section>


<!-- TENTANG -->
<section class="home-section about">
  <h2>TENTANG KAMI</h2>
  <p>
    INAKLUG adalah lembaga konseling pendidikan luar negeri terpercaya yang telah membantu ribuan pelajar Indonesia 
    melanjutkan studi ke universitas ternama di dunia. Kami memberikan bimbingan menyeluruh mulai dari pemilihan jurusan, 
    pendaftaran universitas, hingga persiapan keberangkatan.
  </p>
</section>

<!-- LAYANAN -->
<section class="home-section services">
  <h2>LAYANAN KAMI</h2>
  <div class="home-service-grid">
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Konsultasi Pendidikan Gratis</h3>
    </a>
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Persiapan Dokumen & Aplikasi</h3>
    </a>
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Pelatihan IELTS & TOEFL</h3>
    </a>
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1581090464777-f3220bbe1b8b?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Program Beasiswa Internasional</h3>
    </a>
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1522204501871-5f4b1e3c6ad2?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Pengurusan Visa Pelajar</h3>
    </a>
    <a href="{{ route('layanan') }}" class="home-service-card" style="background-image: url('https://images.unsplash.com/photo-1581091215367-59ab6b1a47a0?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Orientasi Pra-Keberangkatan</h3>
    </a>
  </div>
</section>

<!-- MITRA -->
<section class="partners">
  <h2>MITRA UNIVERSITAS</h2>

  <div class="partner-grid">
    <div class="partner-item">
      <img src="{{ asset('images/fsh1.jpg') }}" alt="University of Oxford">
    </div>
    <div class="partner-item">
      <img src="{{ asset('images/fsh2.jpg') }}" alt="Harvard University">
    </div>
    <div class="partner-item">
      <img src="{{ asset('images/fsh3.png') }}" alt="Monash University">
    </div>
    <div class="partner-item">
      <img src="{{ asset('images/fsh4.png') }}" alt="University of Sydney">
    </div>
  </div>
  
  <div class="banner">
    <p>🎓 Konsultasi GRATIS untuk Kuliah di Australia, UK, Jepang, & Kanada!</p>
    <button class="btn hero-btn">DAFTAR SEKARANG</button>
  </div>
</section>

<!-- ARTIKEL -->
<section class="home-articles">
  <h2>ARTIKEL EDUKASI</h2>
  <div class="home-article-grid">
    <div class="home-article">
      <img src="https://picsum.photos/400/250?random=21" alt="">
      <h3>5 Negara Favorit untuk Pelajar Indonesia</h3>
    </div>
    <div class="home-article">
      <img src="https://picsum.photos/400/250?random=22" alt="">
      <h3>Cara Mendapatkan Beasiswa ke Inggris</h3>
    </div>
    <div class="home-article">
      <img src="https://picsum.photos/400/250?random=23" alt="">
      <h3>Persiapan Kuliah ke Luar Negeri 2025</h3>
    </div>
    <div class="home-article">
      <img src="https://picsum.photos/400/250?random=24" alt="">
      <h3>Tips Meningkatkan Skor IELTS dengan Cepat</h3>
    </div>
  </div>
</section>

<!-- KONTAK -->
<section class="home-section contact">
  <h2>KONSULTASI DENGAN KAMI</h2>
  <p>INAKLUG – Jl. Sudirman No. 88, Jakarta Pusat</p>
  <p>Telp: (021) 8899 1122 | Email: info@inaklug.co.id</p>
  <div class="contact-btns">
    <a href="{{ route('hubungi') }}" class="btn kirim">KONSULTASI SEKARANG</a>
  </div>
</section>

@endsection

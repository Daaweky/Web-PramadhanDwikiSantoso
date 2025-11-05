@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')

<!-- ==================== HERO ==================== -->
<section class="page-hero layanan-hero">
  <div class="page-overlay"></div>
  <div class="hero-caption">
    <h1>LAYANAN KAMI</h1>
  </div>
</section>

<!-- ==================== PROGRAM & LAYANAN ==================== -->
<section class="services">
  <h2>PROGRAM & PELATIHAN</h2>
  <p>
    Kami menyediakan layanan terpadu untuk membantu pelajar Indonesia mempersiapkan studi ke luar negeri dengan langkah yang pasti — 
    mulai dari konsultasi akademik, pendaftaran universitas, hingga pengurusan visa pelajar.
  </p>

  <div class="service-grid">
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Konsultasi Pendidikan Gratis</h3>
    </div>
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Persiapan Dokumen & Aplikasi</h3>
    </div>
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Pelatihan IELTS & TOEFL</h3>
    </div>
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1581090464777-f3220bbe1b8b?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Program Beasiswa Internasional</h3>
    </div>
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1522204501871-5f4b1e3c6ad2?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Pengurusan Visa & Dokumen Legal</h3>
    </div>
    <div class="service-card" style="background-image: url('https://images.unsplash.com/photo-1581091215367-59ab6b1a47a0?auto=format&fit=crop&w=800&q=60');">
      <div class="overlay"></div>
      <h3>Orientasi Pra-Keberangkatan</h3>
    </div>
  </div>
</section>

<!-- ==================== KEMITRAAN ==================== -->
<section class="partners">
  <h2>MITRA UNIVERSITAS</h2>
  <p>
    Kami bekerja sama dengan berbagai universitas ternama di dunia, memberikan kesempatan bagi siswa untuk menempuh pendidikan di 
    Inggris, Australia, Jepang, Kanada, dan negara lainnya. Setiap mitra kami berkomitmen mendukung pelajar Indonesia mencapai potensi terbaiknya.
  </p>

  <div class="partner-grid">
    <div class="partner-box"><img src="{{ asset('images/fsh1.jpg') }}" alt="University of Oxford"></div>
    <div class="partner-box"><img src="{{ asset('images/fsh2.jpg') }}" alt="Harvard University"></div>
    <div class="partner-box"><img src="{{ asset('images/fsh3.png') }}" alt="Monash University"></div>
    <div class="partner-box"><img src="{{ asset('images/fsh4.png') }}" alt="University of Sydney"></div>
  </div>
</section>

@endsection

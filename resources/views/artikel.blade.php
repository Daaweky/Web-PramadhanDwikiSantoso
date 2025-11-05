@extends('layouts.app')

@section('title', 'Artikel')

@section('content')

<section class="artikel-hero">
  <div class="page-overlay"></div>
  <div class="hero-caption">
    <a href="{{ route('artikel.detail') }}" class="hero-link">
      <h1>TIPS Penting!</h1>
      <h1>Cara Mudah Kuliah ke Luar Negeri dengan Beasiswa</h1>
    </a>
  </div>
</section>


<!-- ==================== ARTIKEL UTAMA ==================== -->
<section class="artikel-utama">
  <h2 class="section-title">ARTIKEL UNGGULAN</h2>
  <div class="artikel-grid utama">
    <div class="artikel-card besar">
      <img src="https://images.unsplash.com/photo-1557682250-33bd709cbe85?auto=format&fit=crop&w=800&q=60" alt="Beasiswa Luar Negeri">
      <h3>Panduan Lengkap Mendapatkan Beasiswa ke Luar Negeri</h3>
    </div>
    <div class="artikel-card besar">
      <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=60" alt="Persiapan Kuliah">
      <h3>10 Hal yang Wajib Disiapkan Sebelum Kuliah ke Luar Negeri</h3>
    </div>
  </div>
</section>

<!-- ==================== ARTIKEL LAINNYA ==================== -->
<section class="artikel-lainnya">
  <h2 class="section-title">ARTIKEL LAINNYA</h2>
  <div class="artikel-list">
    <div class="artikel-item">
      <img src="https://images.unsplash.com/photo-1581091012184-5c8f74a1826d?auto=format&fit=crop&w=800&q=60" alt="IELTS Tips">
      <div class="text">
        <h3>Tips Meningkatkan Skor IELTS dengan Cepat</h3>
        <p>Pelajari strategi jitu agar hasil IELTS kamu maksimal, mulai dari manajemen waktu hingga latihan speaking yang efektif.</p>
      </div>
    </div>

    <div class="artikel-item">
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=60" alt="Konsultasi Pendidikan">
      <div class="text">
        <h3>Kenapa Kamu Butuh Konsultan Pendidikan Sebelum Apply Kampus?</h3>
        <p>Ketahui bagaimana konsultan bisa membantu memilih universitas yang tepat sesuai potensi dan jurusan impianmu.</p>
      </div>
    </div>

    <div class="artikel-item">
      <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=800&q=60" alt="Kehidupan Mahasiswa Luar Negeri">
      <div class="text">
        <h3>Kehidupan Mahasiswa Indonesia di Luar Negeri</h3>
        <p>Dengarkan kisah inspiratif mahasiswa Indonesia yang sukses beradaptasi dan berprestasi di berbagai negara dunia.</p>
      </div>
    </div>

    <div class="artikel-item">
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=60" alt="Karier Global">
      <div class="text">
        <h3>Peluang Karier Setelah Lulus dari Kampus Internasional</h3>
        <p>Temukan bagaimana lulusan universitas luar negeri memiliki keunggulan dalam persaingan karier global.</p>
      </div>
    </div>
  </div>

  <!-- ==================== PAGINATION ==================== -->
  <div class="pagination">
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
  </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<!-- ==================== HERO TENTANG KAMI ==================== -->
<section class="about-hero">
  <div class="overlay"></div>
  <div class="hero-caption">
    <h1>TENTANG KAMI</h1>
  </div>
</section>

<!-- ==================== PROFIL PERUSAHAAN ==================== -->
<section class="about-section">
  <div class="container">
    <h2>SIAPA KAMI</h2>
    <p class="intro">
      Kami adalah lembaga konseling pendidikan yang berfokus membantu pelajar Indonesia mencapai impian kuliah di luar negeri. 
      Dengan pengalaman lebih dari satu dekade, kami menyediakan layanan konsultasi menyeluruh mulai dari pemilihan universitas, 
      pengurusan dokumen, pelatihan bahasa Inggris, hingga persiapan keberangkatan.
    </p>

    <p class="intro">
      Kami percaya bahwa pendidikan internasional membuka peluang besar untuk masa depan yang lebih baik. 
      Karena itu, tim konselor kami siap mendampingi setiap siswa secara personal agar dapat menempuh studi di universitas terbaik di dunia dengan jalur yang tepat dan terencana.
    </p>
  </div>
</section>

<!-- ==================== VISI & MISI ==================== -->
<section class="about-visi-misi">
  <div class="container">

    <div class="about-visi">
      <img src="{{ asset('images/visi.jpg') }}" alt="Visi Kami">
      <div class="text">
        <h3>Visi</h3>
        <p>
          Menjadi mitra terpercaya bagi generasi muda Indonesia untuk menempuh pendidikan tinggi di luar negeri 
          dan berkarier di tingkat global.
        </p>
      </div>
    </div>

    <div class="about-misi">
      <img src="{{ asset('images/misi.jpg') }}" alt="Misi Kami">
      <div class="text">
        <h3>Misi</h3>
        <p>
          Memberikan layanan konseling yang profesional, transparan, dan berorientasi pada keberhasilan siswa.  
          Mendukung setiap tahap perjalanan studi mulai dari perencanaan, persiapan akademik, hingga adaptasi di negara tujuan.
        </p>
      </div>
    </div>

  </div>
</section>


@endsection

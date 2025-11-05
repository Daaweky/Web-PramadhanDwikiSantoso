@extends('layouts.app')

@section('title', 'Tips Kuliah ke Luar Negeri')

@section('content')

<!-- ==================== DETAIL ARTIKEL ==================== -->
<section class="artikel-detail">
  <div class="container">

    <!-- JUDUL & META (pusat) -->
    <h1 class="artikel-judul">TIPS Penting: Cara Mudah Kuliah ke Luar Negeri dengan Beasiswa</h1>
    <p class="artikel-meta">🗓️ Dipublikasikan pada 1 November 2025 • Oleh Tim INAKLUG</p>

    <!-- GAMBAR UTAMA (dari folder public/images) -->
    <div class="artikel-gambar">
      <img src="{{ asset('images/bgartikel.jpg') }}" alt="Tips Kuliah ke Luar Negeri">
    </div>

    <!-- ISI ARTIKEL (container sempit, terpusat) -->
    <div class="artikel-isi">
      <p>
        Banyak siswa Indonesia bermimpi untuk melanjutkan kuliah di luar negeri, namun sering kali kebingungan harus memulai dari mana.
        Dengan persiapan yang tepat, peluang mendapatkan beasiswa dan diterima di universitas ternama sangat terbuka lebar.
      </p>

      <h3>1. Tentukan Negara dan Jurusan Tujuan</h3>
      <p>
        Langkah pertama adalah menentukan negara dan bidang studi yang sesuai dengan minatmu.
        Setiap negara memiliki karakteristik pendidikan berbeda, seperti fokus riset, biaya hidup, dan peluang kerja pasca studi.
      </p>

      <h3>2. Siapkan Dokumen Penting Sejak Dini</h3>
      <p>
        Dokumen seperti paspor, transkrip nilai, surat rekomendasi, dan sertifikat bahasa (IELTS/TOEFL)
        wajib disiapkan lebih awal. Pastikan semua dokumen valid dan diterjemahkan secara resmi.
      </p>

      <h3>3. Aktif Mencari Informasi Beasiswa</h3>
      <p>
        Banyak lembaga pemerintah dan swasta menawarkan beasiswa, seperti LPDP, Chevening, Fulbright, dan Erasmus+.
        Cek syarat dan tenggat waktu pendaftaran secara rutin agar tidak ketinggalan.
      </p>

      <h3>4. Tulis Motivation Letter yang Kuat</h3>
      <p>
        Motivation letter adalah kunci penting dalam aplikasi beasiswa. Ceritakan tujuan kariermu, kontribusi yang ingin diberikan, dan alasan kenapa kamu layak mendapat kesempatan itu.
      </p>

      <p><strong>Kesimpulan:</strong> Dengan niat kuat dan persiapan matang, mimpi kuliah ke luar negeri bukan hal mustahil. Mulailah dari sekarang — riset, rencanakan, dan bertindak!</p>
    </div>
  </div>
</section>

<!-- ==================== ARTIKEL TERKAIT ==================== -->
<section class="artikel-terkait">
  <div class="container">
    <h2>Artikel Terkait</h2>
    <div class="terkait-grid">
      <div class="terkait-item">
        <a href="{{ route('artikel.detail', ['slug' => 'motivation-letter']) }}">
          <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=60" alt="Tips Motivation Letter">
          <h3>Tips Sukses Menulis Motivation Letter Beasiswa</h3>
        </a>
      </div>

      <div class="terkait-item">
        <a href="{{ route('artikel.detail', ['slug' => 'atur-waktu-keuangan']) }}">
          <img src="https://images.unsplash.com/photo-1557682250-33bd709cbe85?auto=format&fit=crop&w=800&q=60" alt="Atur Waktu dan Keuangan">
          <h3>Cara Mengatur Waktu dan Keuangan Saat Kuliah di Luar Negeri</h3>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== KONSULTASI ==================== -->
<section class="home-section contact">
  <div class="container">
    <h2>KONSULTASI DENGAN KAMI</h2>
    <p>Tim kami siap membantu kamu merencanakan kuliah dan karier internasional dengan tepat.</p>
    <div class="contact-btns">
      <a href="{{ route('hubungi') }}" class="btn kirim">KONSULTASI SEKARANG</a>
    </div>
  </div>
</section>

@endsection

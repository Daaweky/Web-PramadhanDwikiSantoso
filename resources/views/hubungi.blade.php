@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

<!-- HERO -->
<section class="contact-hero">
  <div class="contact-overlay"></div>
  <div class="hero-caption">
    <h1>HUBUNGI KAMI</h1>
    <p>Kami siap membantu Anda mewujudkan impian kuliah dan berkarier di luar negeri.</p>
  </div>
</section>

<!-- FORM KONTAK -->
<section class="contact-section">
  <div class="container">
    <h2>KONSULTASI DENGAN KAMI</h2>

    <form action="{{ route('hubungi.kirim') }}" method="POST" class="contact-form">
      @csrf
      <div class="form-grid">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>

        <div class="form-group">
          <label for="perusahaan">Asal Sekolah / Universitas</label>
          <input type="text" id="perusahaan" name="perusahaan" placeholder="Masukkan asal sekolah atau universitas">
        </div>

        <div class="form-group">
          <label for="telepon">Nomor Telepon</label>
          <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomor aktif Anda">
        </div>
      </div>

      <div class="form-group full">
        <label for="pesan">Pesan atau Pertanyaan</label>
        <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
      </div>

      <!-- reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6LehGvQrAAAAAMpwh_pciBTqRWYInhk5Gxr2dSBG"></div>

      <button type="submit" class="btn kirim-pesan">KIRIM PESAN</button>
    </form>
  </div>
</section>

<!-- INFORMASI LOKASI -->
<section class="location-section">
  <h2>KANTOR KAMI</h2>
  <div class="location-grid">
    <div class="location-box">
      <h3>Kantor Pusat</h3>
      <p>Jl. Jendral Sudirman No. 88, Jakarta Pusat</p>
      <p>Telp: (021) 8899 1122</p>
      <p>Email: info@inaklug.co.id</p>
    </div>
    <div class="location-box">
      <h3>Kantor Cabang</h3>
      <p>Jl. Asia Afrika No. 20, Bandung</p>
      <p>Telp: (022) 7788 9911</p>
      <p>Email: bandung@inaklug.co.id</p>
    </div>
  </div>
</section>

@endsection

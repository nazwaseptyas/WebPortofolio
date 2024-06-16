@extends('layout/main')
@section('container')
<style>
      .thumb {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    height: 200px; 
    margin-bottom: 20px;
  }

  .thumb img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
<div id="blog" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="section-heading">
          <h6>My Projects</h6>
          <h4>Check My Projects</h4>
          <div class="line-dec"></div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="post-item">
                <div class="thumb">
                  <a href="https://github.com/nazwaseptyas/PI-PeerCounselling"><img src="assets/images/pi.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">Penulisan Ilmiah</span>
                  <span class="date">May 2023 - Jul 2023</span>
                  <a href="#"><h4>Website Peer Counseling Menggunakan Laravel dan Bootstrap</h4></a>
                  <p style="text-align:justify;">Mengembangkan website peer counseling untuk mahasiswa, Fitur web meliputi proses masuk/daftar, pendaftaran konsultasi, manajemen data konsultasi, memulai sesi konseling, artikel, informasi web, halaman kontak, dan modul admin yang mencakup tabel artikel dan konsultasi, Mengimplementasikan database MySQL.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="post-item">
                <div class="thumb">
                  <a href="https://finalproject-braineredu-fe14.netlify.app/"><img src="assets/images/brainer.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">Capstone Project</span>
                  <span class="date">May 2023 - Jun 2023</span>
                  <a href="#"><h4>Website Brainer Education Menggunakan React.JS</h4></a>
                  <p style="text-align:justify;">Mengembangkan web bertema pendidikan sebagai challenge dari Skilvul, dengan fokus pada pembelajaran online gratis dan berbayar, Fitur web meliputi proses masuk/daftar, informasi tentang web, kelas berbayar, proses checkout kelas, jalur pembelajaran, halaman kontak, dan pengaturan profil pengguna.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="post-item last-post-item">
                <div class="thumb">
                  <a href="https://github.com/nazwaseptyas/E-MadingJWP"><img src="assets/images/mading.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">Web Project</span>
                  <span class="date">Des 2023</span>
                  <a href="#"><h4>Website E-Mading Menggunakan Laravel</h4></a>
                  <p style="text-align:justify;">Mengembangkan website mading online, Fitur utama web meliputi proses login untuk admin, artikel, dan modul admin mencakup manajemen data artikel, Mengimplementasikan database MySQL.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="post-item">
                <div class="thumb">
                  <a href="https://github.com/nazwaseptyas/WeddingOrganizerWeb"><img src="assets/images/wo2.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">Web Project</span>
                  <span class="date">Jun 2024</span>
                  <a href="#"><h4>Website Wedding Organizer Menggunakan Laravel</h4></a>
                  <p style="text-align:justify;">Mengembangkan website wedding organizer, Terdapat menu paket katalog, pemesanan paket katalog dan dapat melihat history pemesanan, login, register, dan modul admin, Mengimplementasikan database MySQL.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="post-item">
                <div class="thumb">
                  <a href="https://www.figma.com/design/2mZVp6BAlOY8kInnE4Y6PJ/ADL---HealthNudge?node-id=0-1&t=TSstxH80hAJpJ7H4-1"><img src="assets/images/nudge.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">UI Project</span>
                  <span class="date">Okt 2023 – Nov 2023</span>
                  <a href="#"><h4>Design Aplikasi HealthNudge Menggunakan Figma</h4></a>
                  <p style="text-align:justify;">Mendesign UI untuk aplikasi yang mempromosikan pemesanan makanan serta resep untuk gaya hidup sehat, Fitur utama desain antarmuka pengguna aplikasi ini termasuk proses Masuk/Daftar, pemesanan makanan, pembayaran, resep, kalkulator BMI, dan profil.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="post-item last-post-item">
                <div class="thumb">
                  <a href="https://www.figma.com/design/ntbUVn24bLD9CyEPDQkXa2/Tikum-Coffee-House?node-id=0-1&t=3wFMyZxUJGq0H7sQ-1"><img src="assets/images/tikum.png" alt=""></a>
                </div>
                <div class="right-content">
                  <span class="category">UI Project</span>
                  <span class="date">Okt 2023 - Jan 2023</span>
                  <a href="#"><h4>Design Website Tikum Coffee House Menggunakan Figma</h4></a>
                  <p style="text-align:justify;">Mendesign UI untuk website tikum coffee house, yang merupakan sistem pencatatan digital untuk sebuah coffee shop, Terdapat fitur dashboard admin, product, tracking balance, Point Of Sale, balance, category, dan user management. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
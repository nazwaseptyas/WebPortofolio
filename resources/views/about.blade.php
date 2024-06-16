@extends('layout/main')
@section('container')
<style>
    .card {
  border: none; /* Menghilangkan border pada card */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
  transition: box-shadow 0.3s ease; /* Transisi bayangan */
}

.card:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih besar saat hover */
}

.card-title {
  font-size: 1.2rem;
  font-weight: bold;
  color: #333;
}

.card-text {
  font-size: 1rem;
  color: #666;
}

.card img {
  max-width: 100%;
  height: auto;
}

</style>
<div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/home1.png" alt="" style="width: 500px;">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Me</h6>
                  <h4>Who is Nazwa <em>SeptyaS</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p style="text-align: justify;">My name is Nazwa Septya Salsabilla. I am a graduate with a bachelor's degree in Informatics from Gunadarma University. I have good social and leadership skills and can work well in a team. I am interested in the IT field, particularly in website development. My interest in web design and development began around 2021, and I have been learning ever since. I have developed programming skills using Laravel. I also have an interest in UI/UX design. In the future, I hope to work as a front-end developer for a company that values creativity and innovation, where I can continue to learn and grow as a professional. I am very enthusiastic about where this journey will take me, and I am committed to pursuing my passion for front-end web development with dedication and enthusiasm.</p>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div id="education" class="education section" style="margin-bottom: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <h4 style="text-align: center;">Education</h4>
          {{-- <div class="line-dec"></div> --}}
        </div>
      </div>
      <br><br>
      <!-- Card 1 -->
      <div class="col-lg-6">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <img src="assets/images/logoug.png" class="img-fluid rounded-0" alt="Universitas Gunadarma" style="width: 100px;">
              </div>
              <div class="col-lg-7">
                <h5 class="card-title mb-3">Universitas Gunadarma</h5>
                <p class="card-text">S1 Informatika, 3.96/4.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-6">
        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <img src="assets/images/64.png" class="img-fluid rounded-0" alt="SMAN 64 Jakarta" style="width: 100px;">
              </div>
              <div class="col-lg-7 order-lg-1">
                <h5 class="card-title mb-3">SMAN 64 Jakarta</h5>
                <p class="card-text">IPA</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
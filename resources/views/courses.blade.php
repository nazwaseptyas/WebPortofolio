@extends('layout/main')
@section('container')
<style>
  .portfolio-item .thumb img {
  width: 100%;
  height: 200px; /* Atur sesuai kebutuhan Anda */
  object-fit: cover; /* Memastikan gambar mengisi area tanpa mengubah aspek rasio */
}

</style>
 <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>My Courses & Workshop</h6>
            <h4>See My Courses <em>& Workshop</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/js.png" alt="">
                </div>
                <div class="down-content">
                  <h4>JavaScript Programming Language Fundamental</h4>
                  <span>2023</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/laravel.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Basic Web Application Design</h4>
                  <span>2023</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/vb.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Visual Basic.Net For Intermediate & Beginner</h4>
                  <span>2022/2023</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/java.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Java For Intermediate & Beginner</h4>
                  <span>2022/2023</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/web.jpeg" alt="">
                </div>
                <div class="down-content">
                  <h4>Fundamental Web & Dekstop Programming</h4>
                  <span>2021</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@extends('layouts.user')

@section('css')
 <!-- Link Swiper's CSS -->
 <link rel="stylesheet" href="css/swiper-bundle.min.css" />
<!-- CSS -->
<link rel="stylesheet" href="css/style.css" />

<style>
    /* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.main {
  height: 100vh;
  width: 100%;
}
.wrapper,
.slide {
  position: relative;
  width: 100%;
  height: 100%;
}
.slide {
  overflow: hidden;
}
.slide::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 10;
}
.slide .image {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slide .image-data {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
  z-index: 100;
}
.image-data p.text {
  font-size: 14px;
  font-weight: 400;
  color: #fff;
}
.image-data h2 {
  font-size: 45px;
  font-weight: 600;
  color: #fff;
}
a.button {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 25px;
  color: #333;
  background: #fff;
  text-decoration: none;
  margin-top: 25px;
  transition: all 0.3s ease;
}
a.button:hover {
  color: #fff;
  background-color: #c87e4f;
}

/* swiper button css */
.nav-btn {
  height: 50px;
  width: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
}
.nav-btn:hover {
  background: rgba(255, 255, 255, 0.4);
}
.swiper-button-next {
  right: 50px;
}
.swiper-button-prev {
  left: 50px;
}
.nav-btn::before,
.nav-btn::after {
  font-size: 25px;
  color: #fff;
}
.swiper-pagination-bullet {
  opacity: 1;
  height: 12px;
  width: 12px;
  background-color: #fff;
  visibility: hidden;
}
.swiper-pagination-bullet-active {
  border: 2px solid #fff;
  background-color: #c87e4f;
}

@media screen and (max-width: 768px) {
  .nav-btn {
    visibility: hidden;
  }
  .swiper-pagination-bullet {
    visibility: visible;
  }
}
</style>
@endsection

@section('content')
<section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/img1.jpg" alt="" class="image" />
          <div class="image-data">
              <h2>
                 Apa Itu PEKAT ?
              </h2>
            <p class="text"> Pelaporan Pengaduan Masyarakat (PEKAT) adalah layanan <br />
                penyampaian semua aspirasi dan pengaduan masyarakat Indonesia melalui online.</p>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/img2.jpg" alt="" class="image" />
          <div class="image-data">
              <h2>
                Bagaimana untuk mencapainya <br />
                dan apa tujuannya ?
              </h2>
            <p class="text">Untuk mencapai visi dalam good governance  <br /> maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu.  <br />Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional.</p>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/img3.jpg" alt="" class="image" />
          <div class="image-data">
              <h2>
                  Terdapat Permasalahan <br />
                   Pengaduan Publik ?
              </h2>
            <p class="text">Adukan semuanya di PEKAT secara online !</p>
            <a href="/register" class="button">Daftarkan diri anda disini !</a>
            <a href="/landing" class="button">Sudah punya akun? klik disini !</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
@endsection

@section('js')
 <!-- Swiper JS -->
 <script src="JS/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
@endsection
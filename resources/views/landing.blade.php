@extends('layouts.template')

@section('content')

 
   <!-- ======= Header ======= -->
   <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="/" class="logo">
          <img src="assets/img/lgoinfak.png" alt="">
          <span style="vertical-align: middle; margin-left: 10px; font: 800 20px 'Poppins', sans-serif;">INFAQ WIKRAMA</span>
        </a>
      
       {{-- <h1 class="logo"><a href="index.html">Infaq Wikrama</a></h1>  --}}
      
        <nav id="navbar" class="navbar">
         <ul>
           <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
           <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
           <li><a class="nav-link scrollto " href="#testimoni">Testimoni</a></li>
           <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
           <li><a class="nav-link scrollto" href="#login">Login</a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->
 
      </div>
   </header><!-- End Header -->
 
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="infaq-wikrama">
        <span>
          <span class="infaq-wikrama-span">INFAQ WIKRAMA<br /></span>
          <span class="infaq-wikrama-span2">Tidak perlu menunggu kaya untuk berinfak, mulailah dari apa yang anda miliki</span>
        </span>
        <div class="d-flex" style="margin-top: 70px;">
            <a href="/login" class="btn-get-started scrollto">Login</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

   <main id="main">
 
     <!-- ======= About Section ======= -->
     <section id="tentang" class="about section-bg">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title">
           <h3>Tentang <span>Infaq Wikrama</span></h3>
           <p>Infaq Wikrama adalah aplikasi infaq online
            yang memudahkan Anda untuk memberikan sumbangan secara mudah dan transparan.
           </p>
         </div>
 
         <div class="row">
           <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
             <img src="assets/img/sedekah.png" class="img-fluid" alt="" style="height: 370px; margin-top: 20px;">
           </div>
           <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
             <ul>
               <li>
                <i class="bi bi-box-arrow-in-right"></i>
                 <div>
                   <h5>Kemudahan Akses</h5>
                   <p>Dengan hanya satu genggaman saja, anda dapat lebih mudah berinfaq dan
                    melakukan pembayaran.</p>
                 </div>
               </li>
               <li>
                <i class="bi bi-database-fill-lock"></i>
                 <div>
                   <h5>Data lebih lengkap dan aman</h5>
                   <p>Dilengkapi dengan laporan tagihan dan riwayat bukti pembayaran, kini anda
                    bisa memantau segala aktifitas pembayaran infaq & shodaqoh lebih aman.</p>
                 </div>
               </li>
               <li>
                <i class="bi bi-medium"></i>
                <div>
                  <h5>Penguatan Komunitas Sekolah</h5>
                  <p>Selain memudahkan pembayaran infaq, anda juga dapat 
                    memperkuat komunitas sekolah dengan meningkatkan kolaborasi antara sekolah, siswa, dan orang tua.</p>
                </div>
              </li>
             </ul>
           </div>
         </div>
 
       </div>
     </section><!-- End About Section -->

     <!-- ======= Testimonials Section ======= -->
     <section id="testimoni" class="testimonials">
       <div class="container" data-aos="zoom-in">
 
         <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
           <div class="swiper-wrapper">
 
             <div class="swiper-slide">
               <div class="testimonial-item">
                 <img src="assets/img/testimonials/testi1.png" class="testimonial-img" alt="">
                 <h3>Pak Ijo</h3>
                 <h4>Orang tua siswa</h4>
                 <p>
                   <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Proses berinfaq online sangat mudah dan cepat hanya dengan beberapa klik,
                   tanpa harus menghadiri acara atau mengisi formulir yang rumit.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                 </p>
               </div>
             </div><!-- End testimonial item -->
 
             <div class="swiper-slide">
               <div class="testimonial-item">
                 <img src="assets/img/testimonials/testi2.png" class="testimonial-img" alt="">
                 <h3>Ibu Fatim</h3>
                 <h4>Orang tua siswa</h4>
                 <p>
                   <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Dengan adanya aplikasi ini, saya dapat dengan lebih mudah
                   melihat informasi tentang infaq yang sudah saya bayar dan yang belum saya bayar bulanannya.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                 </p>
               </div>
             </div><!-- End testimonial item -->
 
             <div class="swiper-slide">
               <div class="testimonial-item">
                 <img src="assets/img/testimonials/testi3.png" class="testimonial-img" alt="">
                 <h3>Ibu Saraya</h3>
                 <h4>Orang tua siswa</h4>
                 <p>
                   <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                   Berinfaq secara transfer menjadi lebih mudah karena hanya
                   melakukan kontribusi dengan menggunakan fitur klik,
                   tanpa perlu menyalurkannya secara langsung kepada penerima.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                 </p>
               </div>
              </div><!-- End testimonial item -->
            </div>
           <div class="swiper-pagination"></div>
         </div>
 
       </div>
     </section><!-- End Testimonials Section -->
 
     <!-- ======= Contact Section ======= -->
     <section id="kontak" class="contact">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title">
           <h2>Kontak</h2>
           <h3><span>Hubungi Kami</span></h3>
         </div>
 
         <div class="row" data-aos="fade-up" data-aos-delay="50">
           <div class="col-lg-6">
             <div class="info-box mb-4">
               <i class="bx bx-map"></i>
               <h3>Alamat Kami</h3>
               <p>Jl. Raya Wangun, RT.01/RW.06, Sindangsari,<br>
                Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146 </p>
             </div>
           </div>
 
           <div class="col-lg-3 col-md-6">
             <div class="info-box  mb-4">
               <i class="bx bx-envelope"></i>
               <h3>Email</h3>
               <p>prohumasi@smkwikrama.sch.id</p>
             </div>
           </div>
 
           <div class="col-lg-3 col-md-6">
             <div class="info-box  mb-4">
               <i class="bx bx-phone-call"></i>
               <h3>Phone</h3>
               <p>(0251) 8242411</p>
             </div>
           </div>
 
         </div>
 
         <div class="row" data-aos="fade-up" data-aos-delay="100">
 
           <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4093.892591388974!2d106.84272534173762!3d-6.645118357538914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1708491188420!5m2!1sen!2sid" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              {{-- <iframe class="mb-4 mb-lg-0" src="" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
           </div>
 
           <div class="col-lg-6">
             <form action="forms/contact.php" method="post" role="form" class="php-email-form">
               <div class="row">
                 <div class="col form-group">
                   <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                 </div>
                 <div class="col form-group">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                 </div>
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
               </div>
               <div class="form-group">
                 <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
               </div>
               <div class="my-3">
                 <div class="loading">Loading</div>
                 <div class="error-message"></div>
                 <div class="sent-message">Your message has been sent. Thank you!</div>
               </div>
               <div class="text-center"><button type="submit">Send Message</button></div>
             </form>
           </div>
 
         </div>
 
       </div>
     </section><!-- End Contact Section -->
 
   </main><!-- End #main -->
 
   <!-- ======= Footer ======= -->
   <footer id="footer">
     <div class="footer-top">
       <div class="container">
         <div class="row">
 
           <div class="col-lg-5 col-md-6 footer-contact">
             <h3>Infaq Wikrama<span>.</span></h3>
             <p>
              Jl. Raya Wangun, RT.01/RW.06, Sindangsari,<br>
              Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146 <br><br>
               <strong>Phone:</strong> (0251) 8242411<br>
               <strong>Email:</strong> prohumasi@smkwikrama.sch.id<br>
             </p>
             <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
           </div>
 
           <div class="col-lg-3 col-md-6 footer-links">
             <h4>Useful Links</h4>
             <ul>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimoni">Testimoni</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#kontak">Kontak</a></li>
             </ul>
           </div>
 
         </div>
       </div>
     </div>
 
     <div class="container">
      <div class="copyright">
          &copy; Copyright <strong><span>Infaq Wikrama</span></strong> | 2024
      </div>
      <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
          Kunjungi kami di <a href="https://smkwikrama.sch.id/">smkwikrama</a>
      </div>
  </div>
   </footer><!-- End Footer -->
 
   
@endsection

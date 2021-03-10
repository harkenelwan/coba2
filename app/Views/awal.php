  <?= $this->extend('layout/template'); ?>
  
  <?= $this->section('content'); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>INFO TOMOHON</h1>
          <!-- <h2>lAYANAN INFORMASI SEPUTAR KOTA TOMOHON</h2> -->
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi bi-shop"></i>
            <h3><a href="">HARGA PANGAN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">DATA PENDUDUK</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">INFO RUP</a></h3>
          </div>
        </div>
   
      </div>

    </div>
  </section><!-- End Hero -->

  <?= $this->endSection(); ?>
  
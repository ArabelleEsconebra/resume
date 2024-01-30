<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      
      <img src=<?= base_url("testing/assets/Pictures/Maple Icon.png")?> class="img-fluid" alt="">
      <h1><a href="index.html">Arabelle R. Esconebra</a></h1>
      <h2>I'm a humble <span>IT student</span> from Qui-anan, San Joaquin</h2>

      
      <div>
     <?= $this->include('github/nav') ?>
     </div>

      <div class="social-links">
        <a href="https://www.facebook.com/ara.belle.921/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/avitchsandesu/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>
  <!-- End Header -->
  
  <?= $this->endSection() ?>
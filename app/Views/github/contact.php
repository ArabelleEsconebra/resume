<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

  <div>
  <?= $this->include('github/nav') ?>
  </div>
 
  <!-- ======= Contact Section ======= -->
    <div class="container">
      <br>
      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Details</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Qui-anan, San Joaquin, Iloilo</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://www.facebook.com/ara.belle.921/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/avitchsandesu/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>arabelle.esconebra@wvsu.edu.ph</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>(+63) 956-392-7532</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
  
  <?= $this->endSection() ?>
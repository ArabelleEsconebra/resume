<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

  <div>
  <?= $this->include('github/nav') ?>
  </div>
 
  <style>
    .contact, .info-box {
  color: #444444;
  padding: 20px;
  width: 100%;
  background: rgba(255, 255, 255, 0.08);
}

.contact, .info-box i.bx {
  font-size: 24px;
  color: #ff3c00;
  border-radius: 50%;
  padding: 14px;
  float: left;
  background: rgba(255, 255, 255, 0.1);
}

.contact, .info-box h3 {
  font-size: 20px;
  color: rgba(255, 255, 255, 0.5);
  font-weight: 700;
  margin: 10px 0 8px 68px;
}

.contact, .info-box p {
  padding: 0;
  color: #fff;
  line-height: 24px;
  font-size: 14px;
  margin: 0 0 0 68px;
}

.contact, .info-box, .social-links {
  margin: 5px 0 0 68px;
  display: flex;
}

.contact, .info-box, .social-links a {
  font-size: 18px;
  display: inline-block;
  color: #fff;
  line-height: 1;
  margin-right: 12px;
  transition: 0.3s;
}

.contact, .info-box, .social-links a:hover {
  color: #ff3c00;
}

  </style>

  <!-- ======= Contact Section ======= -->
      <br>
    <div class="container">
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
<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>
  
    <div>
     <?= $this->include('github/nav') ?>
     </div>

     <style>
      /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about-me .content h3 {
  font-weight: 700;
  font-size: 26px;
  color: #ff3c00;
}

.about-me .content ul {
  list-style: none;
  padding: 0;
}

.about-me .content ul li {
  margin-bottom: 10px;
  margin-top: 20px;
  display: flex;
  align-items: center;
}

.about-me .content ul strong {
  margin-right: 10px;
}

.about-me .content ul i {
  font-size: 16px;
  margin-right: 5px;
  color: #ff3c00;
  line-height: 0;
}

.about-me .content p{
  margin-bottom: 20px;
  margin-top: 30px;
  margin-left: 20px;
  margin-right: 40px;
  text-indent: 50px;
  text-align: justify;
}

/*--------------------------------------------------------------
# Interests
--------------------------------------------------------------*/
.interests .icon-box {
  display: flex;
  align-items: center;
  padding: 20px;
  background: rgba(255, 255, 255, 0.08);
  transition: ease-in-out 0.3s;
}

.interests .icon-box i {
  font-size: 32px;
  padding-right: 10px;
  line-height: 1;
}

.interests .icon-box h3 {
  font-weight: 700;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-size: 16px;
  color: #fff;
}

.interests .icon-box:hover {
  background: rgba(255, 255, 255, 0.12);
}


/*--------------------------------------------------------------
# Future
--------------------------------------------------------------*/
.future .future-item {
  box-sizing: content-box;
  min-height: 320px;
  width: 50%;
  margin-left: 20%;
  margin-top: 50px;
}

.future .future-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 45px;
  color: #fff;
}

.future .future-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0 0 0 45px;
}

.future .future-item .quote-icon-left, .future .future-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.25);
  font-size: 26px;
}

.future .future-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.future .future-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  margin-left: 95%;
}

.future .future-item p {
  font-style: italic;
  text-align: justify;
  margin: 0 15px 0 15px;
  padding: 20px 20px 20px 30px;
  background: rgba(255, 255, 255, 0.1);
  position: relative;
  border-radius: 6px;
  position: relative;
  z-index: 1;
}
     </style>

    <!-- ======= About Me ======= -->
    <br>
    <div class="about-me container">

      <div class="section-title">
        <br>
        <h2>About</h2>
        <p>Nice to Meet You</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="testing/assets/Pictures/Ara.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>4th Year BSIT Student</h3>
          <p class="fst-italic has-text-light">
            "I don't know what I am doing, but at least I'm doing something."
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Nicknames:</strong> <span>Ara, Belle, Arabelly</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>June 27 2001</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>Qui-anan, San Joaquin, Iloilo</span></ li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Course:</strong> <span>BS in Information Technology</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Major:</strong> <span>Network and Information Security</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>arabelle.esconebra@wvsu.edu.ph</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>(+63) 956-392-7532</span></li>
              </ul>
            </div>
          </div>
          <p>
            I am an introvert that tends to be very shy, yet I have full confidence in my capabilities and eagerness to learn.
            I work hard for my goals in life and I am willing to go the extra mile to achieve it. I prefer to be a follower, but I am fully
             capable of taking on leadership responsibilities.  My keen observational skills and a heightened sense of empathy are notable strengths. 
             Additionally, I often engage in independent work.
          </p>
        </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <br>
        <h2>What I do in my Free Time</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Watch our Family Store</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Playing Gacha Games</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Watching Vtubers</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Digital Art</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Sending Memes</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Daydream</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Write poems and stories</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Playing the Ukulele</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Learning Coding</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Helping with my Cousins' Education</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Watching Anime</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Watching Cartoons</h3>
          </div>
        </div>
      </div>
    </div><!-- End Interests -->
  
    <!-- ======= Future ======= -->
    <div class="future container">

      <div class="section-title">
      <br>
        <h2>Where I See Myself in 5 Years</h2>
      </div>

          <div class="swiper-slide">
            <div class="future-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <br>Five years from now, I anticipate holding a secure job aligned with my degree and skills, leading to an improved overall life situation. 
                I envision achieving financial independence, allowing me to support my family and cover personal interests and essential needs. 
                Furthermore, I expect to gain more knowledge and wisdom over time. <br>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <h3>Esconebra, Arabelle R.</h3>
              <h4>January, 2024</h4>
            </div>
          </div><!-- End Future item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel future-carousel">

      </div>

    </div><!-- End Future  -->


  <!-- End About Section -->
  
  <?= $this->endSection() ?>
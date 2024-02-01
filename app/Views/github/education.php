<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

    <div>
     <?= $this->include('github/nav') ?>
     </div>
     

<style>
.education, .education-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #fff;
}

.education, .education-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid rgba(255, 255, 255, 0.2);
  position: relative;
}

.education, .education-item h4 {
  line-height: 18px;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #ff3c00;
  margin-bottom: 10px;
}

.education, .education-item h5 {
  font-size: 16px;
  background: rgba(255, 255, 255, 0.15);
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}

.education, .education-item ul {
  padding-left: 20px;
}

.education, .education-item ul li {
  padding-bottom: 10px;
}

.education, .education-item:last-child {
  padding-bottom: 0;
}

.education, .education-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #ff3c00;
  border: 2px solid #cc3000;
}
</style>

  <!-- ======= Education Section ======= -->
      <br>
    <div class="container">
      <div class="section-title">
        <h2>Education</h2>
        <p>Here is My Education</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="education-title">College</h3>
          <div class="education-item pb-0">
            <h4>West Visayas State University</h4>
            <h5>2020 - Present</h5>
            <p><em>Bachelor of Science in Information Technology</em></p>
            <p><em>Major in Network and Information Security</em></p>
            <p>
            <ul>
              <li>Silver Medalist: 2022 - 2023</li>
              <li>Silver Medalist: 2021 - 2022</li>
              <li>Silver Medalist: 2020 - 2021</li>
            </ul>
            </p>
          </div>
          <br>

          <h3 class="education-title">High School</h3>
          <div class="education-item">
            <h4>Don Felix Serra National High School</h4>
            <h5>2017 - 2020</h5>
            <p><em>Senior High School</em></p>
            <p>Science, Technology, Engineering and Mathematics Strand</p>
            <p>
              <ul>
                <li>Graduated with Honors</li>
              </ul>
              </p>
          </div>
          <br>
          <div class="education-item">
            <h4>Don Felix Serra National High School</h4>
            <h5>2014 - 2017</h5>
            <p><em>Junior High School</em></p>
            <p>Science, Technology, and Engineering</p>
            <p>
              <ul>
                <li>Finished with Honors</li>
              </ul>
              </p> 
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="education-title">Elementary</h3>
          <div class="education-item">
            <h4>San Joaquin Central Elementary School</h4>
            <h5>2010 - 2014</h5>
            <p>
            <ul>
              <li>From 3rd grade to 6th grade</li>
            </ul>
            </p>
          </div>
          <br>
          <div class="education-item">
            <h4>Saint Mary's Integrated School</h4>
            <h5>2008 - 2010</h5>
            <p>
              <ul>
                <li>From 1st grade to 2nd grade</li>
              </ul>
            </p>
          </div>
          <br>
          <h3 class="education-title">Preschool</h3>
          <div class="education-item">
            <h4>Colegio de las Hijas de Jesus</h4>
            <h5>2005 - 2008</h5>
            <p>
            <ul>
              <li>Nursery</li>
              <li>Kinder</li>
              <li>Prep</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  <!-- End Education Section -->
  
  <?= $this->endSection() ?>
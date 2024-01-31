<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

    <div>
     <?= $this->include('github/nav') ?>
     </div>

     <style>
     .coloured-container {
  text-align: center;
  background: rgba(204, 204, 204, 0.1);
  padding: 80px 20px;
  transition: all ease-in-out 0.3s;
}

.green-container {
  text-align: center;
  background: rgba(204, 204, 204, 0.1);
  padding: 80px 20px;
  transition: all ease-in-out 0.3s;
}

.coloured-container .icon {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  background: #ff3c00;
  border-radius: 5px;
  transition: all .3s ease-out 0s;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transform-style: preserve-3d;
}

.green-container .green {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  background: #ff3c00;
  border-radius: 5px;
  transition: all .3s ease-out 0s;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transform-style: preserve-3d;
}

.coloured-container .icon i {
  color: #fff;
  font-size: 28px;
}

.green-container .green i {
  color: #fff;
  font-size: 28px;
}

.coloured-container .icon::before {
  position: absolute;
  content: '';
  left: -8px;
  top: -8px;
  height: 100%;
  width: 100%;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 5px;
  transition: all .3s ease-out 0s;
  transform: translateZ(-1px);
}

.green-container .green::before {
  position: absolute;
  content: '';
  left: -8px;
  top: -8px;
  height: 100%;
  width: 100%;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 5px;
  transition: all .3s ease-out 0s;
  transform: translateZ(-1px);
}

.coloured-container h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.green-container h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.coloured-container h4 a {
  color: #fff;
}

.green-container h4 a {
  color: #fff;
}

.coloured-container p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.green-container p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.green-container:hover {
  background: #00842a;
  border-color: #00ff59;
}

.coloured-container:hover {
  background: #ff3c00;
  border-color: #ff3c00;
}

.coloured-container:hover .icon {
  background: #fff;
}

.green-container:hover .green {
  background: #fff;
}

.coloured-container:hover .icon i {
  color: #ff3c00;
}

.green-container:hover .green i {
  color: #00842a;
}

.coloured-container:hover .icon::before {
  background: #ff3c00;
}

.green-container:hover .green::before {
  background: #00842a;
}

.coloured-container:hover h4 a, .coloured-container:hover p {
  color: #fff;
}

.green-container:hover h4 a, .green-container:hover p {
  color: #fff;
}
     </style>

 <!-- ======= Fun Facts Section ======= -->
      <br>
      <div class="section-title">
        <h2>Fun Facts</h2>
        <p>More About Me</p>
      </div>

      <div class="row">
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
      <div class="green-container">
        <div class="green-box">
          <div class="green"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Green</a></h4>
          <p>My favorite color. I was raised in the province and grew up surrounded by nature, so I grew up very fond of the color green.</p>
        </div>
      </div>
    </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Cats Over Dogs</a></h4>
            <p>Cats suit my lifestyle and personality better. Dogs require so much of my time and energy and as an introvert, I don't have 
              that much energy to spare.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Troubleshooter of the Family</a></h4>
            <p>Out of everyone in my family, I am the most familiar with technology. 
              Whether it's troubleshooting mobile phones or setting up the wifi, my family relies 
              on me to understand technology.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Little Helper</a></h4>
            <p>I've been helping my mother with our small family business since 11th grade. Sometimes I do homework and school projects while 
              watching over our delicacy store.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Personal Tutor</a></h4>
            <p>I help my cousins with their homework, both high school and college students. 
              I also explain to them their lessons since they are having a hard time understanding them all on their own.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Hyperfixations</a></h4>
            <p>I have a long history of hyperfixations. When I was a child, I was obsessed with cartoons. 
              In high school, I was an anime weeb. 
              During the pandemic, I was fixated on Minecraft-related content. 
              Nowadays, I am a huge fan of Vtubers.
            </p>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Games</a></h4>
            <p>I mostly play gacha games like Genshin Impact and Twisted Wonderland, but I've never spent
             money on these types of games. I've also played some multiplayer online battle arena games. 
             I've only played mobile games because it's more convenient, 
             I don't have a personal computer, and my laptop is purely for school work.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Music</a></h4>
            <p>I have experience in playing the keyboard, but I have forgotten already. I have a ukulele, but I rarely 
              play it anymore because I've been busy. When it comes to music taste, I listen to different genres. 
              If I like a particular song, I will listen to it regardless of whether the genre is unfamiliar to me.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Writing</a></h4>
            <p>I don't read that much books, but I have written a number of literary works in high school.
               These includes poems, short stories, essays, and feature writings.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Cooking</a></h4>
            <p>I can only cook simple foods like corndogs, pizza rolls, fried rice, omurice, egg rolls, etc.
               I can also make simple desserts like ice cream, choco truffles, and homemade mini pie.
            </p>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="coloured-container">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Art</a></h4>
            <p>I have been making some fanart for the people I look up to. 
             I've been making digital art, vector art, coffee paintings, and traditional art.
             I also have experience in mural painting because of school.
            </p>
          </div>
        </div>

      </div>
      
      <!-- End Fun Facts Section -->

  
  <?= $this->endSection() ?>
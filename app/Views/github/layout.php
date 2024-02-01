<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Me</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href=<?= base_url("testing/assets/Pictures/Maple Icon.png")?> rel="icon">
  <link href=<?= base_url("testing/assets/Pictures/Maple Icon.png")?> rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href=<?= base_url("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i")?> rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=<?= base_url("testing/assets/vendor/bootstrap/css/bootstrap.min.css")?> rel="stylesheet">
  <link href=<?= base_url("testing/assets/vendor/bootstrap-icons/bootstrap-icons.css")?> rel="stylesheet">
  <link href=<?= base_url("testing/assets/vendor/boxicons/css/boxicons.min.css")?> rel="stylesheet">
  <link href=<?= base_url("testing/assets/vendor/glightbox/css/glightbox.min.css")?> rel="stylesheet">
  <link href=<?= base_url("testing/assets/vendor/remixicon/remixicon.css")?> rel="stylesheet">
  <link href=<?= base_url("testing/assets/vendor/swiper/swiper-bundle.min.css")?> rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=<?= base_url("https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css")?> rel="stylesheet">

  <style>
    .container {
  width: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

body {
  color: #fff;
  position: relative;
  background: transparent;
}

body::before {
  content: "";
  position: fixed;
  background: #040404 url("testing/assets/Pictures/Egg banner-01.jpg") center no-repeat;
  background-size: cover;
  left: 0;
  right: 0;
  top: 0;
  height: 100vh;
  z-index: -1;
}


@media (min-width: 1024px) {
  body::before {
    background-attachment: fixed;
  }
}

a {
  color: white;
  text-decoration: none;
}

a:hover {
  color: white;
  text-decoration: none;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: ease-in-out 0.3s;
  position: relative;
  height: 100vh;
  display: flex;
  align-items: center;
  z-index: 997;
  overflow-y: auto;
}

#header img {
  transition: ease-in-out 0.3s;
  position:relative;
  float: left;
  height: 10%;
  width: 50px;
}

#header * {
  transition: ease-in-out 0.3s;
}

#header h1 {
  font-size: 48px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  font-family: "Poppins", sans-serif;
}

#header h1 a, #header h1 a:hover {
  color: #fff;
  line-height: 1;
  display: inline-block;
}

#header h2 {
  font-size: 24px;
  margin-top: 20px;
  color: rgba(255, 255, 255, 0.8);
}

#header h2 span {
  color: #fff;
  border-bottom: 4px solid #070707;
  padding-bottom: 6px;
}

#header img {
  padding: 0;
  margin: 0;
}

#header .social-links {
  margin-top: 40px;
  display: flex;
}

#header .social-links a {
  font-size: 16px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  line-height: 1;
  margin-right: 8px;
  border-radius: 50%;
  width: 40px;
  height: 40px;
}

#header .social-links a:hover {
  background: #070707;
}

@media (max-width: 992px) {
  #header h1 {
    font-size: 36px;
  }
  #header h2 {
    font-size: 20px;
    line-height: 30px;
  }
  #header .social-links {
    margin-top: 15px;
  }
  #header .container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
}

/* Header Top */

#header, .header-top h1 {
  margin-right: auto;
  font-size: 36px;
}

#header, .header-top .container {
  display: flex;
  align-items: center;
}

#header, .header-top .navbar {
  margin: 0;
}

@media (max-width: 768px) {
  #header.header-top {
    height: 60px;
  }
  #header.header-top h1 {
    font-size: 26px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  overflow: hidden;
  position: absolute;
  width: 100%;
  top: 140px;
  bottom: 100%;
  opacity: 0;
  transition: ease-in-out 0.4s;
  z-index: 2;
}

section.section-show {
  top: 100px;
  bottom: auto;
  opacity: 1;
  padding-bottom: 45px;
}

section .container {
  background: rgba(0, 0, 0, 0.9);
  padding: 30px;
}

@media (max-width: 768px) {
  section {
    top: 120px;
  }
  section.section-show {
    top: 80px;
  }
}

.section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 20px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}

.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: #ff3c00;
  margin: 4px 10px;
}

.section-title p {
  margin: 0;
  margin: -15px 0 15px 0;
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #ffffff;
}
  </style>

</head>


<body>
    <div>
        <?= $this->renderSection('content') ?>
    </div>

  <!-- Vendor JS Files -->
  <script src=<?+ base_url("testing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>></script>
  <script src=<?+ base_url("testing/assets/vendor/glightbox/js/glightbox.min.js")?>></script>
  <script src=<?+ base_url("testing/assets/vendor/isotope-layout/isotope.pkgd.min.js")?>></script>
  <script src=<?+ base_url("testing/assets/vendor/swiper/swiper-bundle.min.js")?>></script>
  <script src=<?+ base_url("testing/assets/vendor/waypoints/noframework.waypoints.js")?>></script>

  <!-- Template Main JS File -->
  <script src=<?= base_url("testing/assets/js/main.js")?>></script>

</body>

</html>
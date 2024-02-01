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

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
  margin-top: 35px;
  margin-left: 35px;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar li + li {
  margin-left: 30px;
}

.navbar a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.7);
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: -4px;
  left: 0;
  background-color: #070707;
  visibility: hidden;
  width: 0px;
  transition: all 0.3s ease-in-out 0s;
}

.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
  visibility: visible;
  width: 25px;
}

.navbar a:hover, .navbar .active, .navbar li:hover > a {
  color: #fff;
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
  position: fixed;
  right: 15px;
  top: 15px;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }
  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
  margin-top: 0;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 45px;
  left: 15px;
  padding: 10px 0;
  overflow-y: auto;
  transition: 0.3s;
  border: 2px solid rgba(255, 255, 255, 0.2);
}

.navbar-mobile li {
  padding: 12px 20px;
}

.navbar-mobile li + li {
  margin: 0;
}

.navbar-mobile a {
  font-size: 16px;
  position: relative;
}

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

/*--------------------------------------------------------------
# Education
--------------------------------------------------------------*/
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

/*--------------------------------------------------------------
# Favorites
--------------------------------------------------------------*/
.table-container {
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            margin-left: 50px;
            margin-right: 50px;
        }
        
        .button-container{
            padding: 10px 20px;
            background-color: #ff3c00;
            color: white;
            border: 1px solid #C04000;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-right: 50px;
            margin-bottom: 20%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .delete-container{
            color: #dbdbdb;
            background-color: #880808;
            margin-left: 10px;
        }

        .table{
            color: #dbdbdb;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 50px;
            text-align: center;
        }

        .lol{
            text-align: center;
        }

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
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

<style>
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

      </style>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href=<?= base_url("home")?>>Home</a></li>
          <li><a class="nav-link" href=<?= base_url("about")?>>About</a></li>
          <li><a class="nav-link" href=<?= base_url("facts")?>>Fun Facts</a></li>
          <li><a class="nav-link" href=<?= base_url("favorites")?>>Favorites</a></li>
          <li><a class="nav-link" href=<?= base_url("education")?>>Education</a></li>
          <li><a class="nav-link" href=<?= base_url("contact")?>>Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  
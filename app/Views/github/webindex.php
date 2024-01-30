<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>

  <!-- ======= Header ======= -->
  <div>
  <?= $this->include('github/home') ?>
  </div>
  <!-- End Header -->


  <!-- ======= About Section ======= -->
  <div>
  <?= $this->include('github/about') ?>
  </div>
  <!-- End About Section -->
  

  <!-- ======= Fun Facts Section ======= -->
  <div>
  <?= $this->include('github/facts') ?>
  </div>
  <!-- End Fun Facts Section -->


  <!-- ======= Education Section ======= -->
  <div>
  <?= $this->include('github/education') ?>
  </div>
  <!-- End Education Section -->

  
  <!-- ======= Contact Section ======= -->
  <div>
  <?= $this->include('github/contact') ?>
  </div>
  <!-- End Contact Section -->

  <?= $this->endSection() ?>
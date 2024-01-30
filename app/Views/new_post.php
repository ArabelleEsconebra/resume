
<?= $this->extend('github/layout') ?>

  <?= $this->section('content') ?>
  
  <!-- ======= Contact Section ======= -->
    <div class="container">

      <div class="section-title">
        <h2>Post</h2>
        <p>New Post</p>
      </div>

      <div class="row mt-2">
        <form method="post" action="/contact/new"></form>
        <div class="form-group">
            <label for="">Title</label>
            <input id="" class="form-control" type="text" name="post_title"> 
        </div>
        </form>
    
      </div>
    </div>
  
   <?= $this->endSection() ?>
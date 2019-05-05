<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form-validation.css") ?>">
  </head>
  <body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container-fluid">
      <h1>Discover & share your life in film.</h1>
    </div>
    <div class="row row-card">
      <?php foreach($film as $discover){  ?>
      <div class="col-md-2">
        <div class="card">
          <img class="card-img" src="<?php echo base_url().$discover->poster; ?>" alt="">
          <a class="stretched-link" href="<?php echo base_url('Home/tampil_discover/').$discover->id; ?>"></a>
      </div>
    </div>
    <?php } ?>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
  </body>
</html>

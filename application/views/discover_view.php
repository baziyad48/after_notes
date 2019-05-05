<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form-validation.css") ?>">
    <style> #footer{margin-top: 0; padding-top: 0} .container-fluid{padding-bottom: 0}</style>
  </head>
  <body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container-fluid">
      <h1 class="text-center">Discover & share your life in film.</h1>
      <div class="row row-card" style="margin-top:50px;">
        <?php foreach($film as $discover){  ?>
        <div class="col-md-2">
          <div class="card" style="margin-bottom:30px;">
            <img class="card-img" src="<?php echo base_url().$discover->poster; ?>" alt="">
            <a class="stretched-link" href="<?php echo base_url('Home/tampil_discover/').$discover->id; ?>"></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
  </body>
</html>

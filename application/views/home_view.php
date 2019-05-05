<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>">
  </head>
  <body>
    <?php $this->load->view('_partials/navbar.php'); ?>
    <?php $this->load->view('_partials/recent.php'); ?>
    <?php $this->load->view('_partials/reviews.php'); ?>
    <?php $this->load->view('_partials/footer.php'); ?>
  </body>
</html>

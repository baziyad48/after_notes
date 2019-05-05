<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form-validation.css") ?>">
  </head>
  <body>
    <?php $this->load->view('_partials/navbar.php'); ?>
    <?php foreach($profile as $post){  ?>
      <div class="container">
        <div class="text-center" style="margin-top: 50px;">
          <img class="d-block mx-auto mb-4" src="<?php echo base_url("assets/images/favicon2.png"); ?>" width="100" height="72">
          <h2>Edit Profile</h2>
        </div>
        <div class="container-fluid col-md-8 order-md-1">
          <form  action="<?php echo base_url('Home/aksi_profile') ?>" method="post">
            <div class="mb-3">
              <label>Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="username" value="<?php echo $post->username ?>" disabled>
              </div>
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $post->email ?>" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
              <input class="button-submit container btn-success btn-lg btn-block" type="submit" value="SIMPAN"></input>
          </form>
        </div>
      </div>
    <?php } ?>
    <?php $this->load->view('_partials/footer.php'); ?>
  </body>
</html>

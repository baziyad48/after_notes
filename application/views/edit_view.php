<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form-validation.css") ?>">
  </head>
  <body>
    <?php $this->load->view('_partials/navbar.php'); ?>
    <?php foreach($diary as $post){  ?>
      <div class="container">
        <div class="text-center" style="margin-top: 50px;">
          <img class="d-block mx-auto mb-4" src="<?php echo base_url("assets/images/favicon2.png"); ?>" width="100" height="72">
          <h2>Edit Diary</h2>
        </div>
        <div class="container-fluid col-md-8 order-md-1">
          <form action="<?php echo base_url('Home/aksi_edit') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $post->id ?>"/>
            <div class="mb-3">
              <label>Judul</label>
              <div class="input-group">
                <input type="text" class="form-control" name="judul" value="<?php echo $post->judul ?>" disabled/>
              </div>
            </div>
            <div class="mb-3">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="date" value="<?php echo $post->date ?>" required>
            </div>
            <div class="mb-3">
              <label class="bio">Review</label>
              <textarea class="form-control" rows="5" name="review"><?php echo $post->review ?></textarea>
            </div>
            <label>Rating</label>
            <div class="">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio4" value="4">
                <label class="form-check-label" for="inlineRadio4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio5" value="5">
                <label class="form-check-label" for="inlineRadio5">5</label>
              </div>
            </div>
            <input class="button-submit container btn-success btn-lg btn-block" type="submit" value="SIMPAN"></input>
          </form>
        </div>
      </div>
    <?php } ?>
    <?php $this->load->view('_partials/footer.php'); ?>
  </body>
</html>

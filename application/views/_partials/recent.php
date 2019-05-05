<section id="recent-friend" class="container-fluid">
  <h3>Welcome back, <span><?php echo $this->session->userdata("nama") ?></span> Here’s what popular films on this week…</h3>
  <div class="row">
    <?php foreach($film as $discover){ ?>
      <div class="col-md-3">
        <div class="card">
          <a href="<?php echo base_url('Home/tampil_discover/').$discover->id; ?>"><img class="card-img" src="<?php echo base_url().$discover->poster; ?>" alt=""></a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>

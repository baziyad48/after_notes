<section id="title">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo SITE_NAME ?></a>
    <!-- Responsive Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Main Navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <a class="btn log btn-outline-success my-2 my-sm-0" href="<?php echo base_url('Home/tambah'); ?>"><i class="fas fa-plus"></i> LOG</a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Home/discover'); ?>">DISCOVER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Home/setting'); ?>">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Login/logout'); ?>">LOG OUT</a>
        </li>
      </ul>
    </div>
  </nav>
</section>

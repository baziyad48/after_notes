<!-- Navbar, Hero, Title -->
  <section id="title">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo SITE_NAME ?></a>
      <!-- Responsive Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Main Navigation Bar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" class="btn pt-0 pr-0 pl-0 pb-0" data-toggle="modal" data-target="#SignIn">
              <a href="#" class="nav-link">SIGN IN</a>
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn pt-0 pr-0 pl-0 pb-0" data-toggle="modal" data-target="#SignUp">
              <a href="#" class="nav-link">CREATE ACCOUNT</a>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Background Hero -->
    <div class="container-fluid hero d-flex flex-column justify-content-center align-items-center">
      <div class="hero-text">
        <h1 class="heading">The social network for film lovers.</h1>
        <p>Start your film diary now, it‘s free! Or sign in if you‘re already a member.</p>
      </div>
      <div class="overlay"></div>
    </div>
  </section>

  <div class="modal fade" id="SignIn" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Welcome Back!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Enter username">
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-key"></i></div>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="SIGN IN"/>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="SignUp" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join Us!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url('Login/aksi_register'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="username" placeholder="Enter username">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-key"></i></div>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="SIGN UP"/>
          </div>
        </form>
      </div>
    </div>
  </div>

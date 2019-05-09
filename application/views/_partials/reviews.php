<section id="post" class="container-fluid pt-0">
  <h6>YOUR RECENT REVIEW'S</h6>
  <hr>
  <?php foreach($diary as $post){ ?>
    <div class="media">
      <!--
        <a href="#"><img src="images/poster/shazam.jpg" class="rounded-sm border border-white media-poster" alt="..."></a>
      -->
      <div class="media-body">
        <div class="row media-body-header">
          <div class="col-md-auto title">
            <h4><?php echo anchor('Home/tampil/'.$post->id, $post->judul); ?></h4>
          </div>
          <div class="col-md-auto year my-auto">
            <h4 class="tanggal"><?php echo $post->date ?></h4>            
          </div>
          
          <div class="col-md-auto rating">
            <?php for ($i=0; $i < $post->rating ; $i++) { ?>
              <span><i class="fas fa-star"></i></span>
            <?php } ?>
          </div>
        </div>
        <p class="review text-justify"><?php echo $post->review ?></p>
        <div class="media-body-footer">
          <a class="btn bg-success" href="<?php echo base_url('Home/edit/'.$post->id) ?>">EDIT</a>
          <a class="btn bg-danger" href="<?php echo base_url('Home/hapus/'.$post->id) ?>">DELETE</a>
        </div>
      </div>
    </div>
  <?php } ?>
</section>

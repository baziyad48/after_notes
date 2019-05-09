<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>"
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php $this->load->view('_partials/navbar.php'); ?>
      <?php foreach ($film as $post) { ?>
    <center>
      <style>
        h1{
          text-decoration: underline;
        }
      </style>
      <h1><?php echo $post->judul ?></h1>
      
        <table style=margin:20px auto; border="0" cellspacing="100">
          <tr>
            <th></th>
            <th></th>
            <th></th>                        
          </tr>
          <div class=mb-3 ></div>
          <tr>        
          <td>
            <td></td>
            <img src="<?php echo base_url().$post->poster; ?>" height="600" width="auto"/><br>                  
            <?php echo  $post->year ?><br>      
            <?php echo  $post->genre ?><br>
            <br>
            <?php echo 'Sinopsis <br> ',$post->sinopsis ?><br>
            <br>
            <?php echo 'Cast : ',$post->cast ?><br>
            <?php echo 'Sutradara : ',$post->sutradara ?><br>
            <br>
            </td>
            </tr>
            </div>
        </table>

    </center>
      <?php } ?>
  </body>
</html>

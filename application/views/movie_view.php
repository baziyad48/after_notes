<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en" dir="ltr">
  <head>
  <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css") ?>"
    <meta charset="utf-8">
=======
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|IBM+Plex+Sans:700" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/watchlist_films.css">
  <link rel="stylesheet" href="css/rating.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <title>Diary • AfterNotes</title>
>>>>>>> b926149155d5bc2a94881c07edd68bf3110d7e5e
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

<!DOCTYPE html>
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
    <title></title>
  </head>
  <body>
      <?php foreach ($film as $post) { ?>
    <center>
      <h1><?php echo $post->judul ?></h1>
      <p><?php echo anchor(base_url(), 'back'); ?></p>
        <table style=margin:20px auto; border="1">
          <tr>
            <th>Poster</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Sinopsis</th>
            <th>Cast</th>
            <th>Sutradara</th>
          </tr>
          <tr>
            <td><img src="<?php echo base_url().$post->poster; ?>" height="200" width="auto"/></td>
            <td><?php echo $post->judul ?></td>
            <td><?php echo $post->year ?></td>
            <td><?php echo $post->genre ?></td>
            <td><?php echo $post->sinopsis ?></td>
            <td><?php echo $post->cast ?></td>
            <td><?php echo $post->sutradara ?></td>
            </tr>
        </table>

    </center>
      <?php } ?>
  </body>
</html>

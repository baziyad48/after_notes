<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php foreach ($film as $post) { ?>
    <center>
      <h1><?php echo $post->judul ?></h1>
      <p><?php echo anchor(base_url(), 'back'); ?></p>
        <table style=margin:20px auto; border="1">
          <tr>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Sinopsis</th>
            <th>Cast</th>
            <th>Sutradara</th>
          </tr>
          <tr>
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

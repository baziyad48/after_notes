<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Page</title>
  </head>
  <body>
    <center><h1>Tambah Diary</h1></center>
    <form id="diary-form" action="<?php echo base_url('Home/aksi_tambah') ?>" method="post">
      <table style="margin:20px auto;">
        <tr>
          <td>Judul</td>
          <td><?php echo form_dropdown('judul', $dd_film, $film_selected) ?></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td><input type="date" name="date" required/></td>
        </tr>
        <tr>
          <td>Review</td>
          <td><textarea form="diary-form" name="review"></textarea></td>
        </tr>
        <tr>
          <td>Rating</td>
          <td><input type="text" name="rating" required/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Tambah"/></td>
        </tr>
      </table>
    </form>
  </body>
</html>

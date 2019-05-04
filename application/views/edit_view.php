<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Page</title>
  </head>
  <body>
    <center><h1>Edit Diary</h1></center>
    <?php foreach($diary as $post){ ?>
      <form  action="<?php echo base_url('Home/aksi_edit') ?>" method="post">
        <table style="margin:20px auto;">
          <tr>
            <td>Judul</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $post->id ?>"/>
              <input type="text" name="judul" value="<?php echo $post->judul ?>" disabled/>
            </td>
          </tr>
          <tr>
            <td>Tanggal</td>
            <td><input type="date" name="date" value="<?php echo $post->date ?>" required/></td>
          </tr>
          <tr>
            <td>Review</td>
            <td><textarea rows="5" name="review"><?php echo $post->review ?></textarea></td>
          </tr>
          <tr>
            <td>Rating</td>
            <td><input type="text" name="rating" value="<?php echo $post->rating ?>" required/></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Simpan"/></td>
          </tr>
        </table>
      </form>
    <?php } ?>
  </body>
</html>

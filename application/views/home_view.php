<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>Diary film <span><?php echo $this->session->userdata("nama") ?></span></h1>
      <?php echo anchor('Home/tambah', 'Tambah ') ?>
      <?php echo anchor('Home/setting', '| Setting') ?>
      <table style=margin:20px auto; border="1">
        <tr>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Review</th>
          <th>Rating</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php foreach($diary as $post){ ?>
          <tr>
            <td><?php echo anchor('Home/tampil/'.$post->id, $post->judul); ?></td>
            <td><?php echo $post->date ?></td>
            <td><?php echo $post->review ?></td>
            <td><?php echo $post->rating ?></td>
            <td><?php echo anchor('Home/edit/'.$post->id, 'Edit'); ?></td>
            <td><?php echo anchor('Home/hapus/'.$post->id, 'Hapus'); ?></td>
          </tr>
        <?php } ?>
      </table>
      <?php echo anchor('Login/logout', 'Logout') ?>
    </center>
  </body>
</html>

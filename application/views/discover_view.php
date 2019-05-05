<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>Discover & share your life in film.</h1>
      <p><?php echo anchor(base_url(), 'back'); ?></p>
      <table style=margin:20px auto>
        <tr>
          <?php foreach($film as $discover){ ?>
            <td>
              <a href="<?php echo base_url('Home/tampil_discover/').$discover->id; ?>"><img src="<?php echo base_url().$discover->poster; ?>" height="200" width="auto" style="margin: 0 10px"/></a>
            </td>
          <?php } ?>
        </tr>
      </table>
    </center>
  </body>
</html>

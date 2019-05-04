<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>Edit Profile</h1>
      <?php foreach($profile as $post){ ?>
        <form  action="<?php echo base_url('Home/aksi_profile') ?>" method="post">
          <table style="margin:20px auto;">
            <tr>
              <td>Username</td>
              <td>
                <input type="text" name="username" value="<?php echo $post->username ?>" disabled/>
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="email" name="email" value="<?php echo $post->email ?>" required/></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="password" required/></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" value="Simpan"/></td>
            </tr>
          </table>
        </form>
      <?php } ?>
    </center>
  </body>
</html>

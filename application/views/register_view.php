<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Register here!</h1>
    <form action="<?php echo base_url('Login/aksi_register'); ?>" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" required/></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" required/></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" required/></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Register"/></td>
        </tr>
      </table>
    </form>
  </body>
</html>

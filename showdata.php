<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/table.css">
  </head>
  <body>

      <table>
        <tr>
          <th  >ID No:</th>
          <th  >Full Name:</th>
          <th  >Email:</th>
          <th  >Phone Number:</th>
        </tr>
      <?php

      require_once("connect.php");

      $q = "SELECT * FROM `emplye_users`";

      $querry = mysqli_query($connect,$q);

      while($runquerry=mysqli_fetch_array($querry)){?>

        <tr>
          <td><?php echo $runquerry["id"]; ?></td>
          <td><?php echo $runquerry["fName"].$runquerry["lName"]; ?></td>
          <td><?php echo $runquerry["uemail"]; ?></td>
          <td><?php echo $runquerry["phone_number"]; ?></td>
        </tr>

      <?php } ?>

  </table>
  </body>
</html>

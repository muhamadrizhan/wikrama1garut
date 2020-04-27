<?php
  error_reporting(0);
  include "config/koneksi.php";
  session_start();


  if(isset($_POST['simpan'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      // Insert user data into table
      $result = mysqli_query($con, 
                  "INSERT INTO tbl_user(
                        username,password
                  )
                   VALUES(
                        '$username','$password'
                  )
                  ");

      // Show message when user added
   if ($result) {
      echo "<script>alert('Berhasil Daftar');
      document.location.href='index.php'</script>";
    }else{
      echo "<script>alert('Gagal Daftar');
      document.location.href='register.php'</script>";
    }
  }
  ?>


<html>
      <head>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <title>Register Account</title>
            <h3 class="jumbotron jumbotron-fluid text-center">REGISTER ACCOUNT</h3>
            
      </head>
      <body>
            <div class="container">
            <form method="post" action="register.php">
                  <table class="table" required>
                        <tbody>
                        <tr>
                        <th scope="col">Register Account</th>
                        </tr>
                  </tbody>
                  </table>
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>

                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"required >
                  </div>
                        <button type="submit"  name="simpan" class="btn btn-warning">SIMPAN</button>
                        <button type="reset" name="reset" class="btn btn-dark">RESET</button>
             
            </form>
         </div>     
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
      </body>
</html>
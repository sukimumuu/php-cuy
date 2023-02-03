<?php
require "../db.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        header("location: main.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | Cycleez</title>
        <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../assets/semanticui/semantic.min.css">
    </head>
    <style>
    .ui.middle.center.aligned.grid {
      height: 100%;
    }
    .column {
      max-width: 450px;
      margin-top: 15%;
    }
  </style>
    <body style="background-color: teal;">
         <div class="ui middle center aligned grid">
    <div class="column">
        <h2 class="ui inverted header  ">
           <div class="content">
             Cycleez <i class="fa-solid fa-leaf"></i>
           </div> 
        </h2>
      <div class="ui inverted header">
        <div class="content">
          Log-in to your account
        </div>
      </div>
  
      <form class="ui large form" action="" method="post">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail address">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <button class="ui fluid large teal submit button" name="submit" type="submit" value="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
        <script src="../assets/semanticui/semantic.min.js"></script>
    </body>

</html>
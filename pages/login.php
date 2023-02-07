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
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../assets/css/fontpack.css">
        <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-teal-800">
         <div class="container w-1/3 absolute left-1/3 top-1/3">
          <h4 class="text-center font-sans text-3xl p-1 text-white">Rtrash<i class="fa-solid fa-leaf"></i></h4>
          <div class="mt-10">
            <form action="" method="post">
                <input class="block mb-2.5 mx-auto w-4/6 p-1" type="email" name="email" id="email" placeholder="Email" style="border: 1px solid gray;">
                <input class="block mb-2.5 mx-auto w-4/6 p-1" type="password" name="password" id="password" placeholder="Password" style="border: 1px solid gray;">
                <button class="block text-white mb-3 p-1 mx-auto mt-5 w-4/6 bg-teal-600 hover:bg-teal-700 hover:border-white hover:border-2" name="submit" type="submit">Login</button>
            </form>
            </div>
         </div>
    </body>

</html>
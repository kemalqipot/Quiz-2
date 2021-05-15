<?php
session_start(); 
if( ! isset($_SESSION['username'])){ 
  header("location: index.php"); 
}
?>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Selamat Datang <?php echo $_SESSION['username']; ?></h1>
</br>
  <form method="post" action="logout.php">
    <h4>Anda berhasil login ke dalam aplikasi</h4>
    <input type="submit" class="tombol_login" value="LOGOUT">
  </form>
</body>
</html>
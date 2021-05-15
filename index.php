<?php
session_start(); 

if(isset($_SESSION['username'])){ 
  header("location: home.php"); 
}
?>
<html>
<head>
  <title>Halaman Sebelum Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Login</h1>
    <p class="tulisan_login">Silahkan Login Terlebih Dahulu</p>
    
    <div style="color: red;margin-bottom: 15px;">
      <?php
     
      if(isset($_COOKIE["message"])){ 
        echo $_COOKIE["message"]; 
      }
      ?>
    </div>
  
    <form method="post" action="login.php">
      
      <label>Username</label><br>
      <input type="text" name="username" class="form_login" placeholder="Username"><br><br>
    
      <label>Password</label><br>
      <input type="password" name="password" class="form_login" placeholder="Password"><br><br>
    
      <input type="submit" class="tombol_login" value="LOGIN">
      
    </form>

</body>
</html>
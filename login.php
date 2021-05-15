<?php
    // variable pendefinisian kredensial

    $usernamelogin = 'Kemal';
    $passwordlogin = '123';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } 
    else{ // Jika $data nya kosong
    // Buat sebuah cookie untuk menampung data pesan kesalahan
      setcookie("message", "Maaf, Username atau Password salah", time()+3600);
  
      header("location: index.php"); // Redirect kembali ke halaman index.php
    }
?>
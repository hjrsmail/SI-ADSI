<?php

require_once('../function/koneksi.php');


// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);

// Mengecek pengguna
if (mysqli_num_rows($result) > 0){
    echo '<script language = "javascript">
    alert("Login berhasil!");
    window.location="http://localhost/websiteadsi/Beranda.html";
    </script>';   
} else{
    echo '<script language = "javascript">
    window.location="http://localhost/websiteadsi/SignIn.html";
    alert("Login Gagal, Silahkan coba lagi");
    </script>';
}

?>
<?php
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];

if (mysqli_query($koneksi, "INSERT INTO admin (username, password, email) VALUES ('$username','$password', '$email')")){
    echo '<script language = "javascript">
    alert("Registrasi berhasil dilakukan, silahkan login");
    window.location="http://localhost/websiteadsi/page/signin.php";
    </script>';   
} else{
    echo '<script language = "javascript">
    alert("Registrasi Gagal, Silahkan coba lagi");
    window.location="http://localhost/websiteadsi/page/signup.php";
    </script>';
}
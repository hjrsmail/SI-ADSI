<?php
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$kelas = $_POST['kelas'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO formulir (nama, nisn, email, jenis_kelamin, agama, alamat, asal_sekolah, kelas, no_hp) VALUES ('$nama','$nisn', '$email','$jenis_kelamin', '$agama', '$alamat', '$asal_sekolah', '$kelas', '$no_hp')";

$result = mysqli_query($koneksi, $sql);

if ($result){
    echo '<script language = "javascript">
    alert("Registrasi berhasil dilakukan");
    window.location="http://localhost/websiteadsi/formulir.html";
    </script>';   
} else{
    echo '<script language = "javascript">
    alert("Registrasi Gagal, Silahkan coba lagi");
    window.location="http://localhost/websiteadsi/formulir.html";
    </script>';
}


?>
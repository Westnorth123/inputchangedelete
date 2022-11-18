<?php
 
include "koneksi.php";
$id = $_POST['id'];
$nim = $_POST['NIM'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
 
$query=mysqli_query($koneksi, "UPDATE Data2 SET NIM='$nim', nama='$nama', email='$email', kelas='$kelas', alamat='$alamat' WHERE id='$id'");

if($query) {
    echo "<script>alert('Data berhasil diubah!');window.location='data2.php';</script>";
} else {
    echo "<script>alert('Data gagal diubah');</script>";
}
?>
<?php
include("koneksi.php"); 
$id=$_GET['id'];
$query=mysqli_query($koneksi, "DELETE FROM Data2 WHERE id='".$id."'");

if($query) {
    echo "<script>alert('Data berhasil dihapus!');window.location='data2.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus');</script>";
}
?>
<?php
//pemanggilan file koneksi
include 'koneksi.php';

	//PERHATIKAN HURUF KAPITAL
	//sesuaikan parameter yang dikirimkan dari form input
    
   
    $NIM = $_POST['NIM'];
    $nama= $_POST['nama'];
    $email= $_POST['email'];
    $kelas= $_POST['kelas'];
    $alamat= $_POST['alamat'];


//sesuaikan nama dan atribut tabel yang telah dibuat
$query = mysqli_query($koneksi, "INSERT INTO Data2 VALUES (NULL,'$NIM', '$nama', '$email','$kelas', '$alamat')") or die(mysqli_error($koneksi));

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.html';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

mysqli_close($koneksi);
	
?>
<?php 
//sesuiakan nama file koneksi masing-masing
include 'koneksi.php';

//sesuaikan nama tabel masing-masing
$query = mysqli_query($koneksi, "SELECT * FROM Data2") or die(mysqli_error($koneksi));

$data = array();
while($row = mysqli_fetch_assoc($query))
{
    $data[] = $row; 
}

echo json_encode($data);

mysqli_close($koneksi);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta charset="utf-8">
		<title>Edit Data</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

   </head>
   
<?php
include 'koneksi.php';
$id = $_GET['id']; 
$data = mysqli_query($koneksi,"select * from Data2 where id='$id'");
$d = mysqli_fetch_array($data);

?>
<body>

		<div class="wrapper">
			<div class="inner">
				<form action="edit2.php" method="POST">
					<h3>INPUT DATA MAHASISWA</h3>
					<p>Masukkan Data Anda di Kolom Bawah Ini</p>
					<label class="form-group">
					    <input  type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="nim" name="NIM" class="form-control"  value="<?php echo $d['NIM']; ?>">
						<span>NIM</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="nama" name="nama" class="form-control" value="<?php echo $d['Nama']; ?>" >
						<span for="">Nama</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="email" name="email" class="form-control" value="<?php echo $d['Email']; ?>" >
						<span for="">Email</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="kelas" name="kelas" class="form-control" value="<?php echo $d['Kelas']; ?>" >
						<span for="">Kelas</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="alamat" name="alamat" class="form-control" value="<?php echo $d['Alamat']; ?>">
						<span for="">Alamat</span>
						<span class="border"></span>
					</label>
					
						 <div class="button button2">
                        <input type="submit" name="edit" value="UBAH">
                        </div>
						
					
				</form>
			</div>
		</div>
		
	</body><


</html>
<!doctype html>
<html lang="en">
  <head>
  	<title>Tabel Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="tabel/css/style.css">

	</head>
	<body>
	   
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Data Mahasiswa</h2></h2>
				</div>
			</div>
			  
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
		
						  <thead class="thead-primary">
						    <tr>
						      <th>No</th>
						      <th>NIM</th>
						      <th>Nama</th>
						      <th>Email</th>
						      <th>Kelas</th>
						      <th>Alamat</th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php
                            $konek = mysqli_connect("localhost","","");
                            $database = mysqli_select_db($konek, "");  
  
                            $no = 1;
                            $data = mysqli_query($konek,"select * from Data2");
                            while($r = mysqli_fetch_array($data)){
                            $NIM = $r['NIM'];
                            $nama = $r['Nama'];
                            $email = $r['Email'];
                            $kelas = $r['Kelas'];
                            $alamat = $r['Alamat'];
                                 ?>
        
                            <tr><td><?php echo $no++; ?></td>
                                <td><?php echo $NIM; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $kelas; ?></td>
                                <td><?php echo $alamat; ?></td>
                                </tr>
                                <?php 
                                    }
                                    ?>
						  </tbody>
						</table>
						
                        
					</div>
				</div>
			</div>
		</div>
		
	                    <center>
                        <a href="/index.html" class="button11 button22" style="vertical-align:middle">KEMBALI</a>
                        </center>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


<html>
<head>
    
		<title>Tabel Data Mahasiswa</title>
		
		
</head>
<style>

  .body {
  font-family: "Montserrat-Regular";
  color: #fff;
  font-size: 15px;
  margin: 0; }
  
 h1 {
     font-family : 'Poppins',sans-serif;
 }
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.button {
  font-family : 'Poppins',sans-serif;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  font-family : 'Poppins',sans-serif;
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


 </style>

<body>
    
<center>
<h1>Tabel Data Mahasiswa</h1>
<hr />
</center>
 
 <table style="width:100%" class="table1">

  <tr>
   <th>No</th>
   <th>NIM</th>
   <th>Nama</th>
   <th>Email</th>
   <th>Kelas</th>
   <th>Alamat</th>
   <th>Aksi</th>
  </tr>
  
 
    
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
   <td>
      <a href="edit.php?id=<?php echo $r['id']; ?>" class="button button2"> Ubah </a>
      <a href="hapus.php?id=<?php echo $r['id']; ?>" class="button1 button2"> Hapus </a>
   </td>
  </tr>
  <?php 
  }
  ?>
 </table> 
 
 <center>
    <a href="/index.html" class="button button2" style="vertical-align:middle">KEMBALI</a>
    </center>
   
    
</body>
</html>
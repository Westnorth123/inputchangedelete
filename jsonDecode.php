<!DOCTYPE html>
<html>
<head>
	<title>JSON Decode</title>
	    <!-- Load file bootstrap.min.css yang ada di folder css -->
    <link href="tabel/css/style.css" rel="stylesheet">
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
</head>
<body bgcolor="#fafafc">
    <div class="content">

	    <div style="center">
	        <center>
	            <h2 align="center">Latihan Decode JSON</h2>
	            <h2 align="center">PEMROGRAMAN MOBILE</h2>
	        </center>
	    </div>
	<div class="badan">
	    
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html" style="color: white";><b>Home</b></a>
 
            </div>
        </div>
    </nav>    
    
    
    <?php  
		//sesuaikan lokasi APIreadData masing-masing
        $sumber_json = 'https://harynurrahman.000webhostapp.com/APIreadData.php';
		$konten_json = file_get_contents($sumber_json);
		$data_json= json_decode($konten_json, true);
	?>
	    
    <form class="example" action="">
        <input type="text" name="search" id="txt_searchall" placeholder="Cari Mahasiswa" class="form-control" />
    </form>    
    
	<form action="" method="post">
	   <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NIM</th>
                <th class="text-center">NAMA</th>
                <th class="text-center">KELAS</th>
                <th class="text-center">EMAIL</th>
                <th class="text-center">ALAMAT</th>
            </tr>
            </thead>
            <tbody>
		<?php
		    $no=1;  
			for($a=0; $a < count($data_json); $a++)
			{
				print "<td align='center'>".$no."</td>";
				print "<td align='center'>".$data_json[$a]['NIM']."</td>";
				print "<td align='center'>".$data_json[$a]['Nama']."</td>";
				print "<td align='center'>".$data_json[$a]['Email']."</td>";
				print "<td align='center'>".$data_json[$a]['Kelas']."</td>";
				print "<td align='center'>".$data_json[$a]['Alamat']."</td>";
				print "</tr>";
				$no++;
			}
		?>
		</tbody>
        </table>
	    <div class="col-lg-2">
	    </div>
	     </div>
	      </div>
	      </div>
    </form>
    
    <div id="footer">
        <center>
	            <h4 align="center">Copyright 2022 </br></h4>
	   </center>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>    
    $(document).ready(function(){

  // Search all columns
  $('#txt_searchall').keyup(function(){
    // Search Text
    var search = $(this).val();

    // Hide all table tbody rows
    $('table tbody tr').hide();

    // Count total search result
    var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

    if(len > 0){
      // Searching text in columns and show match row
      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
        $(this).closest('tr').show();
      });
    }else{
      $('.notfound').show();
    }

  });
});

// Case-insensitive searching (Note - remove the below script for Case sensitive search )
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
   return function( elem ) {
     return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
   };
});
</script>

</body>
</html>

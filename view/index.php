<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM pesanan"); // using mysqli_query instead
?>

<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<head>	
	<title>Homepage</title>
</head>

<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Pesanan Id</th>
								<th class="column2">Kota Id</th>
								<th class="column3">User Id</th>
								<th class="column4">Nama Penerima</th>
								<th class="column5">Nomor HP</th>
								<th class="column6">Alamat</th>
								<th class="column7">Tangggal Pemesanan</th>
							</tr>
						</thead>
	
	
	
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['pesanan_id']."</td>";
		echo "<td>".$res['kota_id']."</td>";
		echo "<td>".$res['user_id']."</td>";
		echo "<td>".$res['nama_penerima']."</td>";
		echo "<td>".$res['nomor_telepon']."</td>";
		echo "<td>".$res['alamat']."</td>";
		echo "<td>".$res['tanggal_pemesanan']."</td>";
		
		
	}
	?>
	
	
	
					</table>
				</div>
			</div>
		</div>
	</div>	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>

<?php
	error_reporting(0);
	$conn = @mysql_connect("localhost","root","");
	@mysql_select_db("spp", $conn);
	
	if ($_POST["simpan"]<>"")
	{
		$qry_insert = "insert into data_pembayaran (id_bayar,tgl_bayar,tahun_bayar,jumlah_bayar,no_induk) values('".$_POST["id_bayar"]."','".$_POST["tgl_bayar"]."','".$_POST["tahun_bayar"]."','".$_POST["jumlah_bayar"]."','".$_POST["no_induk"]."')";
		$insert = @mysql_query($qry_insert, $conn) or die (mysql_error());

		header("Location: view_pembayaran.php"); 
	}
?>
<html lang="en">
 <head>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
  <title>Document</title>
  <style>
		td 
		{
			padding: 10px;
		}

		body
		{
			color: #555555;
			font-size: 15px; 
			font-weight: normal;
			font-family:  Segoe UI;
		}
  </style>
 <body>
 <div class="container">
<form action="" method="post" class="form-group">
<div class="row">
<div class="col-lg-15 col-xl-10 mx-auto">
<div class="card card-signin flex-row my-5">
<div class="card-body">
  <table cellpadding='1' cellspacing='0' width='100%' align='center' class="table table-dark">
		<td width='100%'>
			<strong>PEMBAYARAN</strong>
			<br><br>
			<table border="1" width='100%'>
			<form method="POST" action="add_pembayaran.php" >
			<tr>
				<td width='50%'>
					<strong>ID BAYAR : </strong><input type="text" name="id_bayar">
				</td>
			</tr>
			<tr>
				<td width='50%'>
					<strong>Tanggal Bayar : </strong><input type="date" name="tgl_bayar">
				</td>
			</tr>
			<tr>
				<td width='50%'>
					<strong>Tahun Bayar: </strong>
					<input type="radio" name="tahun_bayar" value='2020'>2020
					<input type="radio" name="tahun_bayar" value='2030'>2030	
					<input type="radio" name="tahun_bayar" value='2040'>2040
				</td>
			</tr>
			<tr>
				<td width='50%'>
					<strong>JUMLAH BAYAR: </strong><input type="text" name="jumlah_bayar">
				</td>
			</tr>
			<tr>
				<td width='50%'>
					<strong>NO INDUK : </strong>
					<input type="text" name="no_induk">
				</td>
			</tr>
			<tr>
				<td width='50%'>
					<input type="submit" value="simpan" name="simpan">
					<form>
					<input type="button" value="Index Pembayaran" onclick="window.location.href='view_pembayaran.php'" />
					</form>
				</td>
			</tr>
			</form>
			</table>
		</td>
	</tr>
  </table>
 </body>
</html>
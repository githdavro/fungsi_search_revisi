<?
	error_reporting(0);

	//KONEKSI PHP MYSQL
	$database="spp";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"])
	{
		//SIMPAN DATA
		$id_bayar=$_POST["id_bayar"];
		$tgl_bayar=$_POST["tgl_bayar"];
		$tahun_bayar=$_POST["tahun_bayar"];
		$jumlah_bayar=$_POST["jumlah_bayar"];
		$no_induk=$_POST["no_induk"];

		$q_simpan="insert into data_pembayaran (id_bayar,tgl_bayar,tahun_bayar,jumlah_bayar,no_induk) values ('".$id_bayar."','".$tgl_bayar."','".$tahun_bayar."','".$jumlah_bayar."','".$no_induk."')";
		$sql_simpan = mysql_query($q_simpan, $conn);
	}
?>
<!doctype html>
<html lang="en">
 <head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
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

		.btn-kere {
			font-size: 15px;
			letter-spacing: 1px;
			padding: 10px -10px 15px;
			border-radius: 2rem;
			float: right;
			margin-left: 100px;
			position: absolute;
			left: 560px;
			top: 30px;
		}

		.btn-kere2 {
			font-size: 15px;
			letter-spacing: 1px;
			padding: 10px -10px 15px;
			border-radius: 2rem;
			float: right;
			margin-right: 20px;
			position: absolute;
			right: -1px;
			top: 30px;
		}

		.btn-kanan {
			font-size: 15px;
			letter-spacing: 1px;
			padding: 10px -10px 10px;
			border-radius: 2rem;
			float: right;
			margin-right: 20px;
			position: absolute;
			right: 390px;
			top: 153px;
		}
  </style>
 </head>
 <body>
 <div class="container">
<form action="" method="post" class="form-group">
<div class="row">
<div class="col-lg-15 col-xl-10 mx-auto">
<div class="card card-signin flex-row my-5">
<div class="card-body">
  <table cellpadding='0' cellspacing='0' width='80%' align='center'>
	<tr>
		<td width='100%'>
			<br><br>
			<table width='100%'>
			<form method='post' action='view_pembayaran.php'>
			<tr>
				<td>Cari Pembayaran
				<br><br>
				<input type="text" class="form-control mb-3" name="keyword" size="50" placeholder=" Cari data.."  title="cari data.."></td>
				<br>
				<input type="submit" name="cari" class='btn btn-info btn-kanan' value="Search" title="cari"></td>
				<td >
				<?php

				$sql = " select * from data_pembayaran ";
				$qry = mysql_query($sql);
		
				?>
				</td>
				<td width='50%' align='left'>
					<a href='indextampilan.php' class='btn btn-info btn-kere'> Home  </a>
					<a href='add_pembayaran.php' class='btn btn-info btn-kere2'> Add Pembayaran  </a>
				</td>
			</tr>
			</form>
			</table>
			<br>
			<TABLE width='100%' cellspacing='0' cellpadding='5' border='0'' class='table table-bordered'>
				<thead class='thead-dark'>
				<TR>
					<th><center>ID Bayar</th>
					<th><center>Tanggal Bayar</th>
					<th><center>Tahun Bayar</th>
					<th><center>Jumlah Bayar</th>
					<th><center>NO Induk</th>
					<th><center>Action</th>
				</TR>
				</thead>
				<?php
			if($_POST["cari"])
			{
				$sql_cari = "where (id_bayar like '%".$_POST["keyword"]."%' or tgl_bayar like '%".$_POST["keyword"]."%' or tahun_bayar like '%".$_POST["keyword"]."%' or jumlah_bayar like '%".$_POST["keyword"]."%' or no_induk like '%".$_POST["keyword"]."%') ";
			}
			$result = mysql_query("SELECT * FROM data_pembayaran");

			$show = " select * from data_pembayaran ".$sql_cari." ORDER BY id_bayar ";
			$query = mysql_query($show, $conn);
			while ($data = mysql_fetch_assoc($query))
					{
				?>
				<TR>
					<TD align='center'><?php echo $data["id_bayar"];?></TD>
					<TD align='center'><?php echo $data["tgl_bayar"];?></TD>
					<TD align='center'><?php echo $data["tahun_bayar"];?></TD>
					<TD align='center'><?php echo $data["jumlah_bayar"];?></TD>
					<TD align='center'><?php echo $data["no_induk"];?></TD>

					<TD align='center'>
						<a href='edit_pembayaran.php?id_bayar=<?php echo $data["id_bayar"]; ?>' class="btn btn-warning"><i class="fa fa-edit">Edit</a>
						<br><br>
						<a href='delete_pembayaran.php?id_bayar=<?php echo $data["id_bayar"]; ?>' class="btn btn-danger"><i class="fa fa-trash-o">Delete</a>
					</TD>
				</TR>				
				<?php
					}
				?>
		</td>
	</tr>
  </table>
 </body>
</html>

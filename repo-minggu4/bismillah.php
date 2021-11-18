<!DOCTYPE html>
<html>
<head>
	<title><?php echo "ppdb"; ?></title>
	<style>
		body{
			background-image:url(bg1.png);
			font-family: Goudy Stout;
			font-size: 36;
		}
		.data{
			font-size: 18pt;
			color: #00000;
			padding: 5em;
			margin: 3em auto;
			width: 25em;
			background-image:url(bg2.jpg);
			border-radius: 3px;
			font-family: Comic sans ms;
		}
	</style>
</head>
	<body>
		<h1><center>Biodata Calon PPDB SMA N 1 KENDAL</center></h1>
		<div class="data">
		<table>
		<h3> Info Pendaftaran </h3>
		<tr>
			<td>NISN<td>
			<td><?php echo $_POST["nisn"] ?></td>
		</tr>
		<tr>
			<td>Asal Sekolah<td>
			<td><?php echo $_POST["sekolah"] ?></td>
		</tr>
		<tr>
			<td>Tahun Lulus<td>
			<td><?php echo $_POST["thlulus"] ?></td>
		</tr>
		<h3> Data Calon Peserta </h3>
		<tr>
			<td>Nama Lengkap<td>
			<td><?php echo $_POST["name"] ?></td>
		</tr>
		<tr>
			<td>NIK<td>
			<td><?php echo $_POST["nik"] ?></td>
		</tr>
		<tr>
			<td>Tanggal lahir<td>
			<td><?php echo $_POST["dob"] ?></td>
		</tr>
		<tr>
			<td>Alamat<td>
			<td><?php echo $_POST["address"] ?></td>
		</tr>
		<tr>
			<td>Email<td>
			<td><?php echo $_POST["email"] ?></td>
		</tr>
		<tr>
			<td>No HP<td>
			<td><?php echo $_POST["nohp"] ?></td>
		</tr>
		<h3> Data Orang Tua </h3>
		<tr>
			<td>No Kartu Keluarga<td>
			<td><?php echo $_POST["nkk"] ?></td>
		</tr>
		<tr>
			<td>Nama Ayah Kandung<td>
			<td><?php echo $_POST["namea"] ?></td>
		</tr>
		<tr>
			<td>Agama<td>
			<td><?php echo $_POST["agama"] ?></td>
		</tr>
		<tr>
			<td>Pekerjaan<td>
			<td><?php echo $_POST["pekerjaana"] ?></td>
		</tr>
		<tr>
			<td>Nama Ibu kandung<td>
			<td><?php echo $_POST["namei"] ?></td>
		</tr>
		<tr>
			<td>Agama<td>
			<td><?php echo $_POST["agamai"] ?></td>
		</tr>
		<tr>
			<td>Pekerjaan<td>
			<td><?php echo $_POST["pekerjaani"] ?></td>
		</tr>
		<tr>
			<td>Alamat Orang Tua<td>
			<td><?php echo $_POST["alamat"] ?></td>
		</tr>
		</div>
	</body>

	<?php
		echo $_POST["name"];
		echo "<br>";
	?>
</html>
<?php
include_once('koneksi.php');
if(isset($_POST["simpan"])){
	$ = $_POST["nama"];
	$id = $_POST["id"];
	$email = $_POST["email"];
	$jurusan = $_POST["jurusan"];
    $fakultas = $_POST["fakultas"];
    $gambar = $_POST["gambar"];
	if(!empty($nama) || !empty($id) || !empty($email)|| !empty($jurusan)|| !empty($fakultas)|| !empty($gambar)){
		$sql ="insert into tb_datamahasiswa (nama, id, email, jurusan, fakultas, gambar)
		values ('$nama','$id','$email', '$jurusan', '$fakultas', '$gambar')";
		mysqli_query($conn, $sql);
		echo 'Data Tersimpan';
	}else{
		echo 'Gagal, Lengkapi, Data';
  }
}
?>
<html>
<head>
<title>Tambah Data Mahasiswa Universitas Hardvard</title>
<link rel="stylesheet" href="style1.css">
</head>
<body background="B1.jpg" align="center"> 
	<h1>Tambah Data Mahasiswa Hardvard</h1><br>
	<a href="index.php">Data Mahasiswa</a><br>
	<p><p>
	<form method="post" action="form_tambahmahasiswa.php">
		<label>nama</label><br>
			<input type="text" name="nama"><br>
		<label>NIM</label><br>
			<input type="text" name="id"><br>
		<label>email</label><br>
			<input type="text" name="email"><br><br>
		<label>jurusan</label><br>
			<input type="text" name="jursan"><br><br>
		<label>fakultas</label><br>
			<input type="text" name="fakultas"><br><br>
		<label>gambar</label><br>
			<input type="file" name="gambar"><br><br>

	<input type="submit" name="tambah" value="Simpan">
	<input type="submit" name="batal" value="batal">
</form>
</body>
</html>
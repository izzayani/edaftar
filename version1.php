<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('config.php');

	if (isset(_POST['submit'])) {
		# code...
		$id=($_POST['id'])
		$nama=($_POST['nama_pelajar']);
		$no_kp=($_POST['no_kp']);

		$query1=mysql_query("insert into data pelajar values('$id','$nama_pelajar','$no_kp')")

		if ($query) {
			# code...
			header("location:senarai_pelajar")
		}
	}
	?>
	<center>
	<fieldset style="width: 500px;">
	<h4>TAMBAH REKOD PELAJAR</h4>

	<form method="post" action="senarai_pelajar.php">
	ID PELAJAR : <input type="text" name="id">
	NAMA PEKERJA : <input type="text" name="nama_pelajar"><br>
	
	</form>
	</fieldset>
	</center>

</body>
</html>

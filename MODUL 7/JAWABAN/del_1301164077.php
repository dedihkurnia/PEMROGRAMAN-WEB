<?php 

	include "koneksi_1301164077.php";

	if ($_GET['nim']) {
		# code...
		$result_1301164077=mysqli_query($conn_1301164077,"DELETE from mahasiswa where nim='".$_GET['nim']."'");
		if ($result_1301164077) {
			# code...
			echo "hapus";
		}else {
			echo "gagal";
		}
	}


 ?>
 <br>
 <a href="add_1301164077.php">back</a>
<?php 
if (isset($_POST['updat'])) {
	# code...
	include "koneksi_1301164077.php";
			$nama=$_POST['nama'];
	$result_1301164077=mysqli_query($conn_1301164077,"UPDATE mahasiswa set  nama ='".$_POST['nama']."'  where nim='".$_POST['nim']."'");
	if($result_1301164077) {
				# code...
				echo "SUKSES DI EDIT";
			}else {
				echo "GAGAL EDIT";
			}
}
 ?>
 <br>
 <a href="add_1301164077.php">back</a>
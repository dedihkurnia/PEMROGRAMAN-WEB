<?php 
if (isset($_GET['nim'])) {
	# code...
	include "koneksi_1301164077.php";
	$result_1301164077 = mysqli_query($conn_1301164077,"select * from mahasiswa where nim='".$_GET["nim"]."'");
	if ($data_1301164077 = mysqli_fetch_array($result_1301164077)) {
		# code...
		?>
		<h3>UPDATE</h3>
		<form method="post" action="edit2_1301164077.php?nim=<?php $data_1301164077['nim'];?>">
			NIM : <input type="" name="nim" value="<?php echo $data_1301164077['nim']; ?>"><br>
			Nama : <input type="text" name="nama" value="<?php echo $data_1301164077['nama']; ?>"><br>
			<input type="submit" name="updat" value="UPDATE">


		</form>
		<?php 
		}else echo "DATA tidak ada";
	}
		 ?>
	
<br><a href="mahasiswa_1301164077.php"></a>
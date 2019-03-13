<?php 
		include "koneksi_1301164077.php";

	if (isset($_POST['add_1301164077'] )) {
			# code...
		$nim_1301164077=$_POST['nim_1301164077'];
		$nama_1301164077=$_POST['nama_1301164077'];
		$result_1301164077=mysqli_query($conn_1301164077,"INSERT INTO mahasiswa (nim, nama) 
			VALUES ('$nim_1301164077', '$nama_1301164077')");
		if($result_1301164077) {
				# code...
			echo "SUKSES DI TAMBAH";
		}else {
			echo "GAGAL TAMBAH";
		}
	}
	echo "<br><a href='mahasiswa_1301164077.php'>Input data lagi</a>";
	echo "<br><a href='cariNama__1301164077.php'>Cari Data</a>";



	 ?>
<h3>LIHAT DATA</h3>
<table border="1">
	<tr>
		<td>NAMA</td>
		<td>NAma</td>
		<td>ACTION</td>
	</tr>

<?php 
include "koneksi_1301164077.php";
	$query_1301164077 = mysqli_query ($conn_1301164077,"SELECT * from mahasiswa");
	while ($data_1301164077 = mysqli_fetch_array($query_1301164077)){
	echo "<tr><td>".$data_1301164077['nim']."</td><td>".$data_1301164077['nama']."</td>";
	echo "<td><input type=\"button\" value=\"Hapus\" onclick=\"
	if (confirm('betul di hapus?'))
		{location.href='del_1301164077.php?nim=".$data_1301164077['nim']."'}else{}\"/>
	&nbsp;&nbsp;

	<input type=\"button\" value=\"EDIT\" onclick=\"location.href='edit_1301160192.php?nim=".$data_1301164077['nim']."'\"/>
	</td></tr>";
}

 ?>
</table>

<h3>LIHAT DATA</h3>
<form method="post" >
			
			Nama : <input type="text" name="nama"><br>
			<input type="submit" name="cari" value="cari">


</form>
<table border="1">
	<tr>
		<td>NAMA</td>
		<td>NAma</td>
		<td>ACTION</td>
	</tr>

<?php 
if (isset($_POST['cari'])) {
	include "koneksi_1301164077.php";
	$query_1301164077 = mysqli_query ($conn_1301164077,"SELECT * from mahasiswa where nama ='".$_POST['nama']."'");
	while ($data_1301164077 = mysqli_fetch_array($query_1301164077)){
	echo "<tr><td>".$data_1301164077['nim']."</td><td>".$data_1301164077['nama']."</td>";
	echo "<td><input type=\"button\" value=\"Hapus\" onclick=\"
	if (confirm('betul di hapus?'))
		{location.href='del.php?nim=".$data_1301164077['nim']."'}else{}\"/>
	&nbsp;&nbsp;

	<input type=\"button\" value=\"EDIT\" onclick=\"location.href='edit.php?nim=".$data_1301164077['nim']."'\"/>
	</td></tr>";
}
	# code...
}

	
 ?>
</table>

<br><a href='add_1301164077.php'>back</a>;



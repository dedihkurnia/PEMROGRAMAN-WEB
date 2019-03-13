<!DOCTYPE html>
<html>
<head>
	<title></title>
<style> 
	td{
		text-align: right;
	}
</style>
</head>

<center>
daftar pangkat</br>
<table border=1>
	<tr><th>No</th><th>Bil</th><th>kuadran</th>
		<th>Pangkat-3</th>
	</tr>
<?php
	for($i=1;$i<=10;$i++){
		print "<tr>";
		print "<td>".$i."</td>";
		print "<td>".(($i+1)*5)."</td>";
		print "<td>".pow(($i+1)*5,2)."</td>";
		print "<td>".pow(($i+1)*5,3)."</td>";
		print "</tr>";
	}
?>

</table>
</center>

<body>

</body>
</html>
<?php
	if ($_POST['uname']=='budi' && $_POST['passw']=='123'){
		//kalau pakai session
		session_start();
		$_SESSION['nama']=$_POST['uname'];

		//kkalau pakai cookue
		//setcookie("nama",$_POST['uname']);

		//lanjut ke view.php
		header("Location: view.php")
	}
	else{
		echo "Akses Ditolak";
	}
?>
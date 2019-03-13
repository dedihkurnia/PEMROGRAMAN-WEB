<?php
include 'config.php';

function edt($conn){
	$editName = mysqli_query($conn,"UPDATE participants SET name='".$_POST["nama"]."' WHERE id_users='".$_POST['editId']."'");
	$editGender = mysqli_query($conn,"UPDATE participants SET gender='".$_POST['gender']."' WHERE id_users='".$_POST['editId']."'");
	$editEmail = mysqli_query($conn,"UPDATE participants SET email='".$_POST['email']."' WHERE id_users='".$_POST['editId']."'");
}
function del($conn){
	$query = mysqli_query($conn,"DELETE FROM users WHERE id_users='".$_POST['deleteId']."'");
	$query = mysqli_query($conn,"DELETE FROM participants WHERE id_users='".$_POST['deleteId']."'");
}

if(isset($_POST['editId'])) {
	edt($conn);
} else if(isset($_POST['deleteId'])) {
	del($conn);
}

header('Location: index.php');
exit;
?>
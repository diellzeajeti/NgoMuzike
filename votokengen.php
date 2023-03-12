<?php
require_once('admin/connection.php');
error_reporting(E_ERROR);
$song = $_POST['song'];

if(!isset($_POST['song'])){
	echo "<script>alert('Zgjedh nje kenge!');window.location.href='kenget.php';</script>";
}else{
	$updatepoints = $conn->prepare("UPDATE kenget SET songpoints = songpoints + 1 WHERE s_id = '".$song."'");
	$updatepoints->execute();
		echo "<script>alert('Faleminderit per votimin!');window.location.href='kenget.php';</script>";
}
?>
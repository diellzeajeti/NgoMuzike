<?php
require_once('connection.php');
if($_POST['u_name']=="" || $_POST['u_email']=="" || $_POST['u_psw']==""){
	echo '<script>alert("Plotësoni të gjitha fushat!");
				window.location.href="add-user.php"</script>';	
}else{
$username = $_POST['u_name'];
$email = $_POST['u_email'];
$password = $_POST['u_psw'];

$hashedPw = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO perdoruesi (username, password, email) VALUES (?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$username, $hashedPw, $email]);

	if(!$stmt){
		echo "Error!";
        exit();
	}else{
		echo '<script>alert("Të dhënat u shtuan me sukses!");
				window.location.href="add-user.php"</script>';	
	}
}
?>

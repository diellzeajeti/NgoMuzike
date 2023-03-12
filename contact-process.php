<?php
require_once ("admin/connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO kontakti (name, email, message, created_at) VALUES (:name, :email, :message, :created_at)";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);
$stmt->bindParam(':created_at', $created_at);
$stmt->execute();

	if(!$stmt){
		echo "Error!";
        exit();
	}else{
		echo '<script>alert("Faleminderit qe na kontaktuat!");
				window.location.href="ngomuzike.php"</script>';	
	}
 ?>
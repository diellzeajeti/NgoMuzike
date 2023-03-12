<?php
session_start();
require('connection.php');
$stmt = $conn->prepare("SELECT * FROM kontakti");
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator</title>
<link rel="stylesheet" type="text/css" href="css/AdminStyle.css" />
</head>

<body>
<div class="header_wrapper">
	<div class="time-logout">
          <?php
				$today = date("F j, Y");
				echo '&nbsp;'.$today;
				?>
            <ul>
            	
                <li><a href="../index.php" name="logout">Dil</a></li>
            </ul>
   	</div>
</div>

<div class="container_wrapper">
	<!--Sidebar-->
    <div class="sidebar_menu">
    	<h4 class="header">Menyja ADMIN</h4>
    	<ul>
        	<li><a href="messages.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Mesazhet</a></li>
            <li><a href="users.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Perdoruesit</a></li> 
            <li><a href="add-user.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Shto Perdorues</a></li>
        </ul>
    </div> 
    <!--End Sidebar-->

    <div class="home_content">
    	<h2 class="header">Mesazhet</h2>	
        	
                <br /><br />
                <table class="table">
                	<tr id="tb-header">
                        <td>Emri</td>
                        <td>Email</td>
                        <td>Mesazhi</td>
                    </tr>
                   <tr>
                   <?php foreach ($messages as $message): ?>
                    <tr>
                        <td><?php echo $message['name']; ?></td>
                        <td><?php echo $message['email']; ?></td>
                        <td><?php echo $message['message']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                   </tr>
                </table>
            </div>
        
    </div>
</div>

</body>
</html>
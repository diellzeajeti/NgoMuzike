<?php 
include "../classes/dbConfig.class.php";

session_start();
$admin_id = $_SESSION['admin_id']


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
 
    <link rel="stylesheet" href="css/AdminStyle.css">

</head>
<body>

    <div class="header_wrapper">
	<div class="time-logout">
          <?php
				$today = date("F j, Y");
				echo '&nbsp; '.$today;

                
             
				?>
            <ul>
            	
                <li><a href="../index.php" name="logout">Dil</a></li>
            </ul>
   	</div>
</div>



<div class="container_wrapper">
	
    <div class="sidebar_menu">
    	<div>
    		<h4 class="header">Menyja ADMIN</h4>
        </div>
    	<ul>
        	<li><a href="messages.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Mesazhet</a></li>
            <li><a href="users.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Përdoruesit</a></li>
            <li><a href="add-user.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Shto Përdorues</a></li>        
        </ul>
    </div> 
   
    <div class="home_content">
    	<h2 class="header">ADMINISTRATOR </h2>
        <div class="banner"></div>
    </div>
</div>
</body>
</html>
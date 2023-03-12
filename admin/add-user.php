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
				echo '&nbsp; '.$today;
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
        	<li><a href="messages.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Komentet</a></li>
            <li><a href="users.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Përdoruesit</a></li> 
            <li><a href="add-user.php"><img src="img/list-style.png" height="8"  width="8"/>&nbsp;Shto Përdorues</a></li>
        </ul>
    </div> 
    <!--End Sidebar-->

    <div class="home_content">
    	<h2 class="header">Shto Përdorues</h2>	
        	<div class="form">
            	<form  method="post" action="AdminAddUser.php" name="myform">
                    <div>
                    	<label for="Name">Emri</label>
                        <input type="text" name="u_name" id="u_name" placeholder="Emri" size="39"/>
                    </div>
                    <div>
                    	<label for="email">Email</label>
                        <input type="email" name="u_email" id="u_email" placeholder="Email" size="39"/>
                    </div>
                    <div>
                    	<label for="password">Fjalëkalimi</label>
                        <input type="password" name="u_psw"  placeholder="Fjalëkalimi" size="39"/>
                    </div>
                    <div>
                    	<input type="submit" value="Shto" id="button1" name="add"/>
                        <input type="reset" value="Refuzo" id="button2"/>
                    </div>                  
                </form>
               
            </div>
    </div>
</div>

</body>
</html>
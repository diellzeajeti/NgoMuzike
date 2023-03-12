<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgoMuzikë</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header>
        <img src="img/logo1.png" class="logo"/>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="ngomuzike.php" onclick="toggleMenu();"> NgoMuzikë </a></li>
                <li><a href="rrethnesh.php" onclick="toggleMenu();">RRETH NESH</a></li>
                <li><a href="ngomuzike.php" onclick="toggleMenu();">KËNGËT</a></li>
                <li><a href="votokengen.php" onclick="toggleMenu();"> VOTO </a></li>
                <li><a href="contactform.php" onclick="toggleMenu();">KONTAKTI</a></li>              
                <form action="includes/process-form.php">
                <li><a href="#"><button class="logout" name="logout">DIL</button></a></li>
                </form>
        </ul>
    </header>
    <div class="songcolumn">
   		<div class="header_title">Lista e kengeve</div>
            <form class="songs" action="votokengen.php" method="POST">
			<?php
			
			require_once('admin/connection.php'); 
            $query = "SELECT * FROM kenget";
            $stmt = $conn->query($query);
            $songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $limit = 3;
            $count = 0;

            echo "<table>";
            foreach($songs as $song):
            $id = $song['s_id'];
            $name = $song['songname'];
            $singer = $song['songsinger'];
            $image = $song['songimage'];

            if($count < $limit){
                if($count === 0){
                    echo "<tr>";
                }
                echo "<td width=150><img src=admin/img/$image width=100 height=90></td>";					
                echo "<td><h4>$name</h4>  $singer <br><input type=radio value='$id' name='song'/></td>";
                            }else{
                                $count = 0;
                                echo "</tr><tr>"; //End table row
                                echo "<td width=150><img src=admin/img/$image width=100 height=90></td>";					
                                echo "<td><h4>$name</h4> $singer<br><input type=radio value='$id' name='song'/></td>";				
                            }
                        $count++;
                        endforeach;
            echo "</tr></table>";
            ?>
            <input type="submit" value="Voto këngën" name="submit" id="sub"/>
        </form>
            
                    
        </div>
    </div>
</html>
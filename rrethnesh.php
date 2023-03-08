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
            <li><a href="#banner" onclick="toggleMenu();"> NgoMuzikë </a></li>
                <li><a href="rrethnesh.php" onclick="toggleMenu();">RRETH NESH</a></li>
                <li><a href="#këngët" onclick="toggleMenu();">KËNGËT</a></li>
                <li><a href="" onclick="toggleMenu();">VOTO</a></li>
                <li><a href="#info" onclick="toggleMenu();">INFO</a></li>
                <li><a href="admin/index.php">Admin Login</a></li>                
                <form action="includes/process-form.php">
                <li><a href="#"><button class="logout" name="logout">DIL</button></a></li>
                </form>
        </ul>
    </header>
   

<section class="about" id="rrethnesh">
    <div class="row">
        <div class="col50">
            <h2 class="titleText"><span>Rr</span>eth Nesh</h2>
            <p id="p-about"><span>NgoMuzikë</span> është një sajt me karakter shqip i implementuar në dhjetor të vitit 2022 e që i'u mundëson të dëgjoni vetëm muzikë shqipe. Folklori muzikor shqiptar është jashtëzakonisht i pasur , çka dhe shprehet në ekzistencën e muzikës vokale që nga forma njëzërëshe e deri tek shumëzërëshi; në muzikën me vegla popullore; muzikën me zë e vegla; muzikën për shoqërimin e valleve popullore, etj.
                Muzika është arti i shprehjes së ndjenjave dhe mendimeve me anë të tingujve. Duke pasur parasysh se arti ynë muzikorë është mjaft i pasur
                me këngë mjaft të bukura nga zhanre të ndryshme, NgoMuzikë ka vendosur të u'a sjell të gjitha në një vend, duke i'u kursyer kohë, dhe duke ju argëtuar nëpërmjet talentëve tanë shqiptar.
            <br><br>NgoMuzikë ju ofron të gjithë përdoruesve këngë duke filluar nga ato më në trend dhe më të rejat, gjer tek ato më të vjetra, mirëpo edhe pse të vjetra karakteri i tyre është unik dhe ato do të dëgjohen gjatë.</p>
        </div>
        <div class="col50">
            <div class="imgabout">
                <img src="img/imgabout.png"/>
            </div>
        </div>
    </div>
</section>
<footer class="footer" id="info">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu-footer">
      <li class="menu__item"><a class="menu__link" href="#">NgoMuzikë</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Rreth Nesh</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Shërbimet</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Kontakti</a></li>

    </ul>
    <p>&copy;2022 NgoMuzikë | All Rights Reserved</p>
  </footer>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>
</html>
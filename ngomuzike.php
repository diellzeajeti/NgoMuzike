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
                <li><a href="votokengen.php" onclick="toggleMenu();"> VOTO </a></li>
                <li><a href="#info" onclick="toggleMenu();">INFO</a></li>               
                <form action="includes/process-form.php">
                <li><a href="#"><button class="logout" name="logout">DIL</button></a></li>
                </form>
        </ul>
    </header>
   

    <section class="banner" id="banner">
        <div class="content">
            <div class="left-col">
                <h1>Ngo <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Muzikë</h1>
            </div>
            <div class="right-col">
                <p>Kliko për të dëgjuar</p>
                <img src="img/play.png" id="icon"/>
            </div>
            <audio id="mySong">
                <source src="media/lo-fi.mp3" type="audio/mp3"/>
            </audio>
        </div>
        
    </section>
</section>

<section class="menu" id="këngët">
    <div class="title">
        <h2 class="titleText"><span>K</span>ëngët tona</h2>
    </div>
    <main>
        <div class="menu_side">
            <h1>Top Lista</h1>
            <div class="playlist">
                <h4><span></span>--> Më të dëgjuarat <-- </h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/AlbinaK.jpg" alt="AlbinaKelmendi">
                    <h5>
                        DUJE
                        <div class="subtitle">Albina Kelmendi</div>
                    </h5>
                        <img class="icon" id="1" src="img/play-icon.png"/>
                        <audio id="song1">
                            <source src="media/albina.mp3" type="audio/mp3"/>
                        </audio>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/DonXhon.jpg" alt="DonXhon">
                    <h5>
                        DILEMA
                        <div class="subtitle">Don Xhon</div>
                    </h5>
                        <img class="icon" id="2" src="img/play-icon.png"/>
                        <audio id="song2">
                            <source src="media/donxhon.mp3" type="audio/mp3"/>
                        </audio>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/fifi-markel.jpeg" alt="Fifi-Markel">
                    <h5>
                        DEHUR
                        <div class="subtitle">Fifi x Markel Goga</div>
                    </h5>
                        <img class="icon" id="3" src="img/play-icon.png"/>
                        <audio id="song3">
                            <source src="media/fifi-markel.mp3" type="audio/mp3"/>
                        </audio>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/flamur-ilir.jpg" alt="Flamur-Ilir">
                    <h5>
                        A T'MUNGOJ
                        <div class="subtitle">Flamur x Ilir</div>
                    </h5>
                        <img class="icon" id="4" src="img/play-icon.png"/>
                        <audio id="song4">
                            <source src="media/flamur-ilir.mp3" type="audio/mp3"/>
                        </audio>
                </li>
                <li class="songItem">
                    <span>05</span>
                        <img src="img/ylli-lori.jpg" alt="Yll-Loredana">
                    <h5>
                        Kriminele
                        <div class="subtitle">Yll Limani x Loredana</div>
                    </h5>
                        <img class="icon" id="5" src="img/play-icon.png"/>
                        <audio id="song5">
                            <source src="media/yll-lori.mp3" type="audio/mp3"/>
                        </audio>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/bardhi.jpg" alt="Bardhi">
                    <h5>
                        Kalli
                        <div class="subtitle">Bardhi</div>
                    </h5>
                        <img class="icon" id="6" src="img/play-icon.png"/>
                        <audio id="song6">
                            <source src="media/bardhi.mp3" type="audio/mp3"/>
                        </audio>
                </li>
            </div>
        </div>
        <div class="song_side" id="song">
            <div class="new_songs">
                <div class="h4">
                    <h4>Këngë nga 2022</h4>
                </div>
                <div class="songs">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/genc.jpeg" alt="gencprevlukaj">
                            <img class="icon" id="7" src="img/play-icon.png"/>
                            <audio id="song7">
                                <source src="media/genc.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Leter per ty
                            <br>
                            <div class="subtitle">Genc Prevlukaj</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/nrgband.jpg" alt="nrgband">
                            <img class="icon" id="8" src="img/play-icon.png"/>
                            <audio id="song8">
                                <source src="media/nrgband.mp3" type="audio/mp3"/>
                            </audio>
                            
                        </div>
                        <h5>Prej teje se prita
                            <br>
                            <div class="subtitle">NrgBand x Tuna</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/dhurata-elvana.jpg" alt="dhurata-elvana">
                            <img class="icon" id="9" src="img/play-icon.png"/>
                            <audio id="song9">
                                <source src="media/dhurata.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Gajde
                            <br>
                            <div class="subtitle">Dhurata Dora x Elvana Gjata</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/kida.jpeg" alt="kida-butrint">
                            <img class="icon" id="10" src="img/play-icon.png"/>
                            <audio id="song10">
                                <source src="media/kida.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>AM / PM
                            <br>
                            <div class="subtitle">Kida ft Butrint Imeri</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/ylli.jpeg" alt="yll-limani">
                            <img class="icon" id="11" src="img/play-icon.png"/>
                            <audio id="song11">
                                <source src="media/ylli.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Malet
                            <br>
                            <div class="subtitle">Yll Limani</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/dafina.jpg" alt="dafinazeqiri">
                            <img class="icon" id="12" src="img/play-icon.png"/>
                            <audio id="song12">
                                <source src="media/dafina.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Dhimbje dhimbje
                            <br>
                            <div class="subtitle">Dafina Zeqiri</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/ritafidan.jpg" alt="rita-fidan">
                            <img class="icon" id="13" src="img/play-icon.png"/>
                            <audio id="song13">
                                <source src="media/ritafidan.mp3" type="audio/mp3"/>
                            </audio>
                            
                        </div>
                        <h5>Luje mindilin
                            <br>
                            <div class="subtitle">Rita & Fidan</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="old_songs">
                <div class="h4">
                    <h4>Këngë të vjetra</h4>
                </div>
                <div class="songs">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/bedri.jpg" alt="bedriislami">
                            <img class="icon" id="14" src="img/play-icon.png"/>
                            <audio id="song14">
                                <source src="media/gocepejane.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Goce Pejane
                            <br>
                            <div class="subtitle">Bedri Islami</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/fisniket.jpg" alt="fisniket">
                            <img class="icon" id="15" src="img/play-icon.png"/>
                            <audio id="song15">
                                <source src="media/zoteriajuaj.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Zoteria juaj
                            <br>
                            <div class="subtitle">Fisniket</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/Minatori.jpg" alt="minatori">
                            <img class="icon" id="16" src="img/play-icon.png"/>
                            <audio id="song16">
                                <source src="media/molla_me_sherbet.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Molla me sherbet
                            <br>
                            <div class="subtitle">Minatori</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/nexhmije.jpg" alt="nexhmijepagarusha">
                            <img class="icon" id="17" src="img/play-icon.png"/>
                            <audio id="song17">
                                <source src="media/edehun.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>E dehun jam
                            <br>
                            <div class="subtitle">Nexhmije Pagarusha</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/naser.jpeg" alt="naserberisha">
                            <img class="icon" id="18" src="img/play-icon.png"/>
                            <audio id="song18">
                                <source src="media/dotedoja.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Do te doja
                            <br>
                            <div class="subtitle">Naser Berisha</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/trix.jpg" alt="trix">
                            <img class="icon" id="19" src="img/play-icon.png"/>
                            <audio id="song19">
                                <source src="media/zeshkanja.mp3" type="audio/mp3"/>
                            </audio>
                        </div>
                        <h5>Zeshkanja ime
                            <br>
                            <div class="subtitle">TRIX</div>
                        </h5>
                    </li>
            </div>
            <div class="table">
                <h2 id="h2">Më të klikuarit e javës</h2>
                <table>
                    <tr>
            
                        <td><img class="img" src="img/familjakelmendi.png"/></td>
                        <td><img class="img" src="img/donxhoni.jpg"/></td>
                        <td><img class="img" src="img/dafinaz.png"/></td>
                        <td><img class="img" src="img/mozzik.png"/></td>
                    </tr>
                </table>
            </div>  
        </div>
        </main>
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
</body>
</html>
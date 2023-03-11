<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgoMuzikë</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <form class="main-form" action="includes/process-form.php" method="post">
        <div class="form-nav">
            <button type="button" id="login-btn">Kyqu</button>
            <button type="button" id="signup-btn">Regjistrohu</button>
        </div>
        <div class="signup-form hidden">
            <h2>Krijo llogari</h2>
            <label for="user">Emri</label>
            <input type="text" id="user" name="username" placeholder="Emri">

            <label for="pwd">Fjalekalimi</label>
            <input type="password" id="pwd" name="password" placeholder="Fjalekalimi">

            <label for="pwdrepeat">Konfirmo fjalekalimin</label>
            <input type="password" id="pwdrepeat" name="pwdrepeat" placeholder="Fjalekalimi">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">

            <label for="user_type">Lloji perdoruesit</label>
            <select name="isAdmin" id="isAdmin">
                <option selected value="0">Perdorues i thjeshte</option>
                <option value="1">Admin</option>
            </select>

            <button type="submit" name="signup" id="submit">Regjistrohu</button>
        </div>
        <div class="login-form">
            <h2>Kyqu</h2>
            <label for="userL">Emri</label>
            <input type="text" id="userL" name="usernameL" placeholder="Emri">

            <label for="pwdL">Fjalekalimi</label>
            <input type="password" id="pwdL" name="passwordL" placeholder="Fjalekalimi">
            
            <button type="submit" name="login">Kyqu</button>
        </div>
        
    </form>
    

    <script src="js/registerform.js"></script>
</body>
</html>
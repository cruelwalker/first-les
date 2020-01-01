<?php
    require_once('main.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rami Oh</title>
    </head>
    <body>
        <p>Welcom to our fun game please write your name here sumener</p>
        <div id="content-container">
            <div id="login-container">        
                <form action="index.php" class="signForm" method="POST">
                    <input type="text" name="player1name" placeholder="Write your name Here*" required>                     
                    <button type="login" name="loginBtn" value="Login">Login</button>
                </form>
            </div>
        </div> 
    </body>
</html>
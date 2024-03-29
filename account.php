<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptopow - Account</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" href="./img/logo.png">
        <link rel="stylesheet" href="https://use.typekit.net/vub1dne.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    </head>
    <body>
        <?php include './php/topbar.php'; ?>
        <div class="about">
            <br><br>
            <h1><strong>Hi there, <?php if (isset($_SESSION['uname'])){echo $_SESSION['uname'];} ?></strong></h1>
            <div class="recommend-outside" id="popup">
                <div class="recommend" id="popup-1">
                    <?php include './php/logout.php'; ?>
                    <?php include './php/account.php'; ?>
                </div>
            </div>
            <!-- <p>I use linux btw</p> -->
            <br><br>
            <div class="account-button">
                <form action="" method="post">
                    <input type="submit" value="Logout" name="logout">
                </form>
                <br><br>
                <button onclick="show()"><h3>Change Password</h3></button>
                <br><br>
            </div>
            <div id="account-box">
                <div class="account">
                    <br><br>
                    <form action="" method="post">
                        <label for="passwd">Current Password</label><br>
                        <input type="password" name="current"><br><br>
                        <label for="passwd">Password</label><br>
                        <input type="password" name="passwd"><br><br>
                        <label for="confirm">Confirm Password</label><br>
                        <input type="password" name="confirm"><br><br>
                        <input type="submit" value="Change Password" name="change">
                    </form>
                    <br><br><br>
                </div>
            </div>
            <br><br>
        </div>
        <br><br><br><br>
        <div class="botbar">
            <h1><span>&#169;2022</span>Cryptopow</h1>
            <div class="botbar-img">
                <img src="./img/logo.png" alt="logo" width="15%">
            </div>
            <div class="botbar-social">
                <a href="https://github.com/gagahsyuja" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://instagram.com/gagahsyuja__" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/gagah.s.abdullah" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
        <script>
		
            let popup = document.getElementById("popup");
			let popup1 = document.getElementById("popup-1");

            function closePopup()
            {
                popup.style.display = 'none';
				popup1.style.display = 'none';
                window.location = './index.php';
            }

            function closePopupLogin()
            {
                popup.style.display = 'none';
				popup1.style.display = 'none';
                window.location = './login.php';
            }

            function closePopupOnly()
            {
                popup.style.display = 'none';
				popup1.style.display = 'none';
            }

            function show()
            {
                var account = document.getElementById("account-box");

                if (account.style.display === "none")
                {
                    account.style.display = "block";
                }

                else
                {
                    account.style.display = "none";
                }
            }

        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptopow - Bitcoin Gold</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    </head>
    <body>
        <div class="topbar">
            <div class="topbar-title">
                <h1><a href="../index.html#top">Cryptopow</a></h1>
            </div>
            <div class="topbar-menu">
                <a href="../index.html#top">Home</a>
                <a href="../help.php">Help</a>
                <a href="../about.html">About</a>
            </div>
        </div>
        <br><br>
        <div class="box">
            <br><br>
            <h3 class="title">Bitcoin Gold<br>(BTG)</h3>
            <h3 class="title">
                <form action="../watch/btg.php" method="post">
                    <?php

                    session_start();

                    include '../conn.php';

                    $dbname = $_SESSION['uname'];

                    $sql = "SELECT * FROM $dbname WHERE watchlist_id = '2'";
                    $exist = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($exist) > 0)
                    {
                        echo '<br><button type="submit" name="submit"><i class="fa-sharp fa-solid fa-eye fa-2x"></i></button>';
                    }

                    else
                    {
                        echo '<br><button type="submit" name="submit"><i class="fa-sharp fa-regular fa-eye fa-2x"></i></button>';
                    }
                    
                    ?>
                </form>
            </h3>
            <img class="image" src="https://cryptologos.cc/logos/bitcoin-gold-btg-logo.png?v=023" alt="image of Bitcoin Gold" width="18%">
            <br><br>
            <table class="details">
                <tr>
                    <td class="details-link-title"><h3>Algorithm</h3></td>
                    <td class="details-link">
                        <a href="https://cryptorival.com/algorithms/zhash" target="_blank">ZHash(Equihash 144,5)</a>
                    </td>
                </tr>
                <tr>
                    <td class="details-link-title"><h3>Pools</h3></td>
                    <td class="details-link">
                        <a href="https://btg.2miners.com/" target="_blank">2Miners</a>
                        <a href="https://bitcoin-gold.miningpoolhub.com/" target="_blank">Mining Pool Hub</a>
                        <a href="https://hashcity.org/" target="_blank">HashCity</a>
                    </td>
                </tr>
                <tr>
                    <td class="details-link-title"><h3>Miners</h3></td>
                    <td class="details-link">
                        <a href="https://github.com/develsoftware/GMinerRelease" target="_blank">GMiner</a>
                        <a href="https://github.com/Lolliedieb/lolMiner-releases" target="_blank">LolMiner</a>
                        <a href="https://github.com/miniZ-miner/miniZ" target="_blank">miniZ</a>
                    </td>
                </tr>
                <tr>
                    <td class="details-link-title"><h3>Price</h3></td>
                    <td class="details-link">
                        Rp<span id="btg" style="color: #3c3836"></span>
                    </td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
        <div class="botbar">
            <h1><span>&#169;2022</span>Cryptopow</h1>
            <div class="botbar-img">
                <img src="../img/logo.png" alt="logo" width="15%">
            </div>
            <div class="botbar-social">
                <a href="https://github.com/Discipl4" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://instagram.com/gagahsyuja__" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/gagah.s.abdullah" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
        <script src="../js/btg.js"></script>
    </body>
</html>
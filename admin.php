// Pâyidar Code - Pâyidar
<?php

    include ("data.php");
    session_start();
    if(!isset($_SESSION["login"])){
        echo "
            <style>
                .error{
                    padding: 10px;
                    background-color: #ff0000;
                    border-radius: 10px;
                    width: 500px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: #000;
                    box-shadow: 0px 2px 50px 0px rgba(255, 26, 5, .5);
                }

                </style>

                <div class='error'>
                
                <p>Giriş Yapılamadı.</p>
                <p>Giriş Yapmadan Gelme Bro.</p>
                
                </div>
            ";
            header("Refresh: 2; url=index.php");
            exit();
    } else{
        $payidar = $_SESSION["username"];

        echo "
        
            <h1>Hoşgeldin ${payidar}</h1>

            <a href='cikis.php'>Çıkış Yap<a>

        ";
    }
?>
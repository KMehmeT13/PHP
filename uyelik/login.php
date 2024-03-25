<?php

include("baglanti.php");

$username_err = "";
$parola_err = "";

if (isset($_POST["giris"])) {
    //Kullanıcı adı doğrulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı boş geçilemez";
    } else {
        $username = $_POST["kullaniciadi"];
    }


    //parola doğrulama
    if (empty($_POST["parola"])) {
        $parola_err = "Parola boş geçilemez";
    } else {
        $parola = $_POST["parola"];
    }



    if (isset($username) && isset($parola)) {
        $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi='$username'";
        $calistir = mysqli_query($baglanti, $secim);
        $kayitsayisi = mysqli_num_rows($calistir); // 0 yada 1 olması lazım

        if ($kayitsayisi > 0) {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["parola"];

            if (password_verify($parola, $hashlisifre))
             {
                session_start();
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                $_SESSION["email"] = $ilgilikayit["email"];
                header("location:profile.php");
            } else {
                echo '<div class="alert alert-danger" role="alert"> 
        Parola yanlış
        </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert"> 
        Kullanıcı adı yanlış
        </div>';
        }



        mysqli_close($baglanti);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giris sayfası</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!doctype html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title> &amp; CSS Only</title>

        <link rel="stylesheet" href="./style.css">

    </head>

    <body>


        <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

            <div class="signin">

                <div class="content">

                    <form action="login.php" method="POST"> <!-- kayit işlemi aksiyonu burada -->
                        <h2>Giriş Yap</h2>

                        <div class="form">

                            <div class="inputBox"> <!-- kullanıccı adı text boxu buradan başlar -->
                                <div id="validationServer03Feedback" class="invalid-feedback"> <?php echo $username_err;    ?></div>
                                <input type="text" name="kullaniciadi" class="form-control is-invalid" required>
                                <i>Kullanıcı adı</i>

                                <br>
                                <br>
                                <div class="inputBox"><!-- şifre text boxu buradan başlar -->
                                    <div id="validationServer03Feedback" class="invalid-feedback"> <?php echo $parola_err;    ?> </div>
                                    <input type="password" name="parola" class="form-control is-invalid" required>
                                    <i>Parola</i>
                                </div>

                                <br>


                                <br>


                                <div class="inputBox">

                                    <input type="submit" name="giris" value="Giriş Yap">

                                </div>

                            </div>

                        </div>

                </div>

        </section> <!-- partial -->

    </body>

    </html>
    <!-- partial -->

</body>

</html>
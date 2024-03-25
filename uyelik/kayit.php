<?php

include("baglanti.php");

$username_err = "";
$email_err = "";
$parola_err="";
$parolatkr_err ="";

if (isset($_POST["kayitol"])) {
  //Kullanıcı adı doğrulama
  if (empty($_POST["kullaniciadi"])) {
    $username_err = "Kullanıcı adı boş geçilemez";
  } elseif (strlen($_POST["kullaniciadi"]) < 6) {
    $username_err = "Kullanıcı adı en az 6 karakter";
  } elseif (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) {
    $username_err = "kullanıcı adı büyük küçük harfve rakamdan oluşmalıdır.";
  } else {
    $username = $_POST["kullaniciadi"];
  }

  //email doğrulama
  if(empty($_POST["eposta"]))
  {
    $email_err="Email boş geçilemez";
  }
  elseif(!filter_var($_POST["eposta"], FILTER_VALIDATE_EMAIL)){
    $email_err="geçersiz e mail formatı";
  }
  else{
    $email=$_POST["eposta"];
  }

  //parola doğrulama
  if(empty($_POST["parola"]))
  {
    $parola_err="Parola boş geçilemez";
  }
  else{
    $parola=password_hash($_POST["parola"], PASSWORD_DEFAULT); 
  }

  //parola tekrar doğrulama
  if(empty($_POST["parolatkr"]))
  {
    $parolatkr_err="parola tekrar kısmı boş geçilemez";
  }
  else if($_POST["parola"]!=$_POST["parolatkr"]){
    $parolatkr_err="parolalar eşleşmiyor";
  }
  else{
    $parolatkr=$_POST["parolatkr"];
  }


  if(isset($username) && isset($email) && isset($parola) )
  {






  $ekle = "INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')"; //girilen değerleri database e ekler
  $calistirekle = mysqli_query($baglanti, $ekle); //database e ekleme fonksiyonunu çalıştırır.

  if ($calistirekle) { // database e eklenirken sorun çıkmadıysa çalışan ve kullanıcıya geri bildirim veren karar yapısı 
    echo '<div class="alert alert-success" role="alert"> 
        Kayit Basarili bir sekilde eklendi. 
        </div>';
  } else { // database e ekleme yapılırken hata oluşması halinde kullanıcıya geri bildirim veren karar yapısı
    echo '<div class="alert alert-danger" role="alert"> Kayit eklenirken bir problem oluştu. </div>';
  }
  mysqli_close($baglanti);
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kayit sayfasi</title>
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

          <form action="kayit.php" method="POST"> <!-- kayit işlemi aksiyonu burada -->
            <h2>Kayıt Ol</h2>

            <div class="form">

              <div class="inputBox"> <!-- kullanıccı adı text boxu buradan başlar -->
                <div id="validationServer03Feedback" class="invalid-feedback"> <?php echo $username_err;    ?></div>
                <input type="text" name="kullaniciadi" class="form-control is-invalid" required> <i>Kullanıcı adı</i>

                <br>
                <br>
                <div class="inputBox"><!-- şifre text boxu buradan başlar -->
                  <div id="validationServer03Feedback" class="invalid-feedback"> <?php echo $parola_err;    ?> </div>
                  <input type="password" name="parola" class="form-control is-invalid" required>
                  <i>Parola</i>
                </div>

                <br>

                <div class="inputBox"><!-- şifre tekrar text boxu buradan başlar -->
                  <div id="validationServer03Feedback" class="invalid-feedback"> <?php echo $parolatkr_err;    ?></div>
                  <input type="password" name="parolatkr" class="form-control is-invalid" required>
                  <i>Parola doğrulama</i>
                </div>

                <br>
                <br>

                <div class="inputBox"> <!-- e posta text boxu buadan başlar -->

                  <div id="validationServer03Feedback" class="invalid-feedback"><?php echo $email_err;    ?> </div>
                  <input type="email" name="eposta" class="form-control is-invalid" required> <i>e-posta</i>
                  <!-- Burada biter. -->

                  <br>
                  <br>


                  <div class="inputBox">

                    <input type="submit" name="kayitol" value="Kayit Ol">

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
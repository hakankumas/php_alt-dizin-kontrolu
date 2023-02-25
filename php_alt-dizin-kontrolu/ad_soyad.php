<?php
session_start();

if(!isset($_SESSION["oturum"])){
    header("location: index.php");
}
?>
<html>
    <?php
    echo "Hoş Geldin "; echo $_SESSION["tc_no"];
    ?>
    <br>
    <?php
    echo $_SESSION["password"];
    ?>
</html>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="tools/style.css">
    <link rel="stylesheet" href="tools/bootstrap.css">
    <title>deukariyer.net</title>
    <link rel="icon" type="image/png" href="assets/img/deuybs.png">    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end align-items-center yukseklik">
                <div id="logreg-forms" class="w-50 px-5 py-5 mx-auto bg-light text-dark">
                    <form action="islem.php" method="post" class="form-signin">
                        <br><br>
                        <h1 class="h1 mb-5 font-weight-normal" style="text-align: center"> BİLGİ</h1>
                        <br><br>
                        <input type="text" name="adi" class="form-control" placeholder="Adınız" autofocus>
                        <br>
                        <input type="text" name="soyadi" class="form-control" placeholder="Soyadınız">
                        <br>
                        <button name="info_giris" class="btn btn-success btn-block mt-5" type="submit"><i class="fas fa-sign-in-alt"></i> Giriş Yap</button>
                        <br>
                        <button class="btn btn-danger btn-block" type="reset" id="btn-signup"><i class="fas fa-times"></i> Temizle</button>
                    </form>
                    <div><a href="cikis.php">Çıkış</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>
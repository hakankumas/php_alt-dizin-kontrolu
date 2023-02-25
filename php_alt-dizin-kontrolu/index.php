<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="form-group col-2 col-sm-2 bg-light p-4">
            <form action="islem.php" method="POST">
                <h2 class="mb-4">LOGIN</h2>
                <div class="form-outline mb-4">
                    <input type="text" id="tc_no" name="tc_no" class="form-control" placeholder="TC No" autofocus/>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button>
            </form>
            <br>
            <div><a href="cikis.php">Çıkış</a></div>
        </div>
    </div>
</body>
</html>
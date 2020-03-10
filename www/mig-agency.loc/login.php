<?php
session_start();
$users = 'admin';
$hash_pass = "202cb962ac59075b964b07152d234b70";
//$pass = '123';
if ($_POST['submit']) {
    if ($users == $_POST['user'] AND $hash_pass == md5(($_POST['pass']))) {
        $_SESSION['admin'] = $users;
        header("Location: index.php");
        exit;
    } else {
        echo '
        <div class="alert alert-danger">
            <strong>Ошибка!</strong> Логин или пароль не верны!
        </div>
        ';
    }

}
?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Авторизация в системе</title>
    </head>
    <body class="container">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Выйти</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <h3>Авторизация в системе</h3>
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="user">Логин</label>
                        <input type="text" class="form-control" name="user" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Пароль</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>
                    <input type="submit" name="submit" value="Войти" class="btn btn-success">
                    <a href="/" class="btn btn-info">Отмена</a>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center fixed-bottom" style="margin-bottom:0;">
        <p><?php echo "Все права защищены. Агентство МИГ &copy; " . " " . date("Y"); ?>
        </p>
    </footer>
    <script src="js/confirmdelete.js"></script>
    </body>
</html>
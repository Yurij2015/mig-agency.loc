<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body class="container">

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Компании</h1>
    <p>Рекламные страницы наших клиентов!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">MigAgency</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Войти</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <p>Список страниц наших клиентов!</p>
    <ul>
        <li><a href="/companies/?number_company=first" target="_blank">Компания Феорана</a></li>
        <li><a href="/companies/?number_company=first" target="_blank">ООО ДорСтрой</a></li>
        <li><a href="/companies/?number_company=first" target="_blank">ООО Рекламные технологии</a></li>
        <li><a href="/companies/?number_company=first" target="_blank">ООО Торговый дом МИП</a></li>
        <li><a href="/companies/?number_company=first" target="_blank">ИП Макаров И. В. </a></li>


    </ul>

</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Агентство МИГ</p>
</div>

</body>
</html>

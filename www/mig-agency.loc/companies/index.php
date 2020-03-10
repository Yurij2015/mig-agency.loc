<!DOCTYPE html>
<?php require_once "config.php"; ?>
<html lang=<?= $lang ?>>
<?php require_once "header.php"; ?>
<body class="container">

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1><?= $company->companie_name ?></h1>
    <p><?= $company->description ?></p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">CompanyProfile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
            require_once "db_public.php";
            $menu = R::getAll('SELECT * FROM menu');
            foreach ($menu as $item_menu) {
                ?>
                <li class="nav-item">
                    <a class="nav-link"
                       href="/?item_menu=<?= $item_menu['item_name']; ?>"><?= $item_menu['slug']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <?php
            $number_company = $company->number_company;
            $articles = R::getAll("SELECT *, articles.id as ida FROM articles JOIN companies_articles ca on articles.id = ca.articles_id JOIN companies c on ca.companies_id = c.id WHERE c.number_company = '{$number_company}'");
            foreach ($articles as $single_article) {
                ?>
                <h2 class="text-uppercase"><?= $single_article['article_name']; ?>
                </h2>
                <img src="<?= $single_article['images']; ?>" alt="" class="float-left  mr-3" width="400" ><?= $single_article->article_name; ?>
                <p class="text-justify"><?= $single_article['content']; ?></p>
                <br>
                <?php
            }
            ?>

        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>

</body>
</html>

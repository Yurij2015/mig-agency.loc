<!DOCTYPE html>
<?php require_once "edit_config.php"; ?>
<html lang=<?= $lang ?>>
<?php require_once "edit_header.php"; ?>
<body class="container">

<div class="jumbotron text-center" style="margin-bottom:0">
    <!-- Ссылка, вызывающее модальное окно -->
    <h1><a href="#editTitleCompany" data-toggle="modal"
           style="text-decoration: none;"><?= $company->companie_name ?></a></h1>
    <p><a href="#editDescription" data-toggle="modal"
          style="text-decoration: none;"><?= $company->description ?></a></p>
</div>
<?php
require_once "modals/modal-company-name.php";
require_once "modals/modal-company-description.php";
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">CompanyProfile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
            require_once "db_admin.php";
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
            $articles = R::getAll('SELECT *, a.id as ida FROM companies_articles JOIN articles a on companies_articles.articles_id = a.id JOIN companies c on companies_articles.companies_id = c.id');
            foreach ($articles as $single_article) {
                ?>
                <h2 class="text-uppercase">
                    <a href="#"
                       style="text-decoration: none;" data-toggle="modal" data-target="#editArticle<?= $single_article['ida']; ?>.bd-example-modal-lg"><?= $single_article['article_name']; ?></a>
                </h2>
                <div class="fakeimg"><img src="" alt=""><?= $single_article['article_name']; ?></div>
                <p><?= $single_article['content']; ?></p>
                <?php
                $p = $single_article['ida'];
                require "modals/modal-article.php"; ?>
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

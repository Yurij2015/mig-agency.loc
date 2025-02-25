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
            $number_company = $company->number_company;
            $articles = R::getAll("SELECT *, articles.id as ida FROM articles JOIN companies_articles ca on articles.id = ca.articles_id JOIN companies c on ca.companies_id = c.id WHERE c.number_company = '{$number_company}'");
            foreach ($articles as $single_article) {
                ?>
                <h2 class="text-uppercase">
                    <a href="#"
                       style="text-decoration: none;" data-toggle="modal" data-target="#editArticle<?= $single_article['ida']; ?>.bd-example-modal-lg"><?= $single_article['article_name']; ?></a>
                </h2>
                <img src="<?= $single_article['images']; ?>" alt="" class="float-left  mr-3" width="400" ><?= $single_article->article_name; ?>
                <p class="text-justify"><?= html_entity_decode($single_article['content']); ?></p>
                <?php
                require "modals/modal-article.php";
                ?>
                <br>
                <?php
            }
            ?>

        </div>
    </div>
</div>

<div class="jumbotron text-center mt-5" style="margin-bottom:0">
    <p><?= $company->companie_name ?></p>
</div>

</body>
</html>

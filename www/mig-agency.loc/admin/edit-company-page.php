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
            <h2>TITLE HEADING</h2>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco.</p>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>

</body>
</html>

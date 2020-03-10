<?php
/**
 * Created by PhpStorm.
 * File: company-name-handler.php
 * Date: 09/03/2020
 * Time: 23:58
 */
require_once "../db_admin.php";
if ($_POST) {
    $article_name = trim(htmlspecialchars($_POST['article_name']));
    $content= trim(htmlspecialchars($_POST['content']));
    $id = $_POST['article_id'];
    $number_company = $_POST['number_company'];
    if (!empty($article_name)) {
        $article = R::load('articles', $id);
        $article->article_name = $article_name;
        $article->content = $content;
        R::store($article);
        header('Location: ../edit-company-page.php?number-company=' . $number_company);
    }
}

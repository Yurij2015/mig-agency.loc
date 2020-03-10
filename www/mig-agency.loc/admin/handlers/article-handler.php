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
        $target_file_for_db = "../../images/" . basename($_FILES["fileToUpload"]["name"]);
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (isset($_POST["fileToUpload"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if ($_FILES["fileToUpload"]["size"] > 2000000) {
            $uploadOk = 0;
            header('location: repertoire_view.php?msg=Sorry, your file is too large.');
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], iconv('utf-8', 'windows-1251', $target_file))) {
                $article = R::load('articles', $id);
                $article->article_name = $article_name;
                $article->content = $content;
                $article->images = $target_file_for_db;
                $fileuploaded = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                R::store($article);
                header('Location: ../edit-company-page.php?number-company=' . $number_company);
            } else {
                header('location: repertoire_view.php?msg=Sorry, there was an error uploading your file.');
            }
        }

    }
}

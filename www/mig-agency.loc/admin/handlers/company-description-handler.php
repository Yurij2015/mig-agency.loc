<?php
/**
 * Created by PhpStorm.
 * File: company-name-handler.php
 * Date: 09/03/2020
 * Time: 23:58
 */
require_once "../db_admin.php";
if ($_POST) {
    $description = trim(htmlspecialchars($_POST['description']));
    $id = $_POST['companie_id'];
    $company = R::findOne('companies', 'id = ?', ["$id"]);
    $number_company = $company->number_company;
    if (!empty($description)) {
        $companies = R::load('companies', $id);
        $companies->description = $description;
        R::store($companies);
        header('Location: ../edit-company-page.php?number-company=' . $number_company);
    }
}

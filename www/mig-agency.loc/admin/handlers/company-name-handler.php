<?php
/**
 * Created by PhpStorm.
 * File: company-name-handler.php
 * Date: 09/03/2020
 * Time: 23:58
 */
require_once "../db_admin.php";
if ($_POST) {
    $companie_name = trim(htmlspecialchars($_POST['companie_name']));
    $id = $_POST['companie_id'];
    $company = R::findOne('companies', 'id = ?', ["$id"]);
    $number_company = $company->number_company;
    if (!empty($companie_name)) {
        $companies = R::load('companies', $id);
        $companies->companie_name = $companie_name;
        R::store($companies);
        header('Location: ../edit-company-page.php?number-company=' . $number_company);
    }
}

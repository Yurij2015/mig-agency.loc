<?php
/**
 * Created by PhpStorm.
 * File: db_public.php
 * Date: 09/03/2020
 * Time: 22:03
 */
require("../libraries/RedBeanPHP5_4_2-mysql/rb-mysql.php");
R::setup('mysql:host=mysql_migagency;port=3306;dbname=migagency', 'migagency', '3004917779');
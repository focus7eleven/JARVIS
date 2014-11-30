<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2014/10/24
 * Time: 22:22
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

include_once "./protected/functions.php";
require_once($yii);
Yii::createWebApplication($config)->run();
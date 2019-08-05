<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-25
 * Time: 오전 10:55
 */
include_once $_SERVER['DOCUMENT_ROOT'].'/phptest/ClassRoom/glob.inc.php';
setcookie('userId','',time(),'/');
header('location: ../index.php');
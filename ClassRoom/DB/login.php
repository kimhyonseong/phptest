<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-31
 * Time: 오후 4:16
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/phptest/ClassRoom/glob.inc.php';

$cip = new cipherClass();
$dbi = new dbClass();
$dbi->dbOpen('A_test');

$id = $dbi->escapeStr($_POST['id']);
$pw = $dbi->escapeStr($cip->encrypt($_POST['pw']));
$cookId = $cip->encrypt($_POST['id']);

$sql = 'select * from user where id="'.$id.'" and pw = "'.$pw.'"';
echo $sql;
$query = $dbi->queryDB($sql);

if (mysqli_num_rows($query) < 1){
    echo '<script>alert("아이디 또는 비밀번호를 확인해주세요."); history.back();</script>';
} else {
    setcookie('userId',$cookId,time()+600,'/');
    header('location: ../home');
}


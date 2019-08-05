<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-08-02
 * Time: 오전 9:59
 */

include_once '../lib/class/dbClass.php';

$dbi = new dbClass();

$dbi->dbOpen('A_test');

$id = $dbi->escapeStr($_POST['id']);

// id가 존재하는지 확인
$sql = 'select id from user where id = "'.$id.'"';

$query = $dbi->queryDB($sql);
$cnt = mysqli_num_rows($query);

// 1줄 이상 존재한다면 false 그외엔 true
if ($cnt > 0) {
    echo false;
} else {
    echo true;
}
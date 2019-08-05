<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-31
 * Time: 오후 6:22
 */

if (!isset($_POST['id']) ||
    !isset($_POST['pw']) ||
    !isset($_POST['pw_ch']) ||
    !isset($_POST['usr_nm']) ||
    !isset($_POST['birth']) ||
    !isset($_POST['email'])
) {
    echo '<script>alert("잘못된 경로입니다."); history.back();</script>';
    exit();
}

include_once $_SERVER['DOCUMENT_ROOT'].'/phptest/ClassRoom/glob.inc.php';

$dbi = new dbClass();
$cipher = new cipherClass();

$dbi->dbOpen('A_test');

$id = $dbi->escapeStr($_POST['id']);
$pw = $cipher->encrypt($dbi->escapeStr($_POST['pw']));
$pw_ch = $cipher->encrypt($dbi->escapeStr($_POST['pw_ch']));
$usr_nm = $dbi->escapeStr($_POST['usr_nm']);
$birth = $dbi->escapeStr($_POST['birth']);
$email = $dbi->escapeStr($_POST['email']);

echo $id.'<br>';
echo $pw.'<br>';
echo $pw_ch.'<br>';
echo $usr_nm.'<br>';
echo $birth.'<br>';
echo $email.'<br>';

// 중복 아이디 있을시 돌아감
//$sql = 'select * from user where id='.$id;

if ($pw != $pw_ch ||
    trim($id) == '' ||
    trim($pw) == '' ||
    trim($usr_nm) == '' ||
    trim($birth) == '' ||
    trim($email) == ''
) {
    echo '<script>alert("정확하지 않은 정보가 들어있습니다."); history.back();</script>';
} else {

    // 아이디가 유니크 키라서 오류나면 뒤로가는거로 하자
    $sql = 'insert into user(id,pw,usr_nm,birth,email) ';
    $sql .= 'values("' . $id . '","' . $pw . '","' . $usr_nm . '","' . $birth . '","' . $email . '")';

    if($query = $dbi->queryDB($sql)) {
        echo '성공';
        //echo '<script>alert("가입 완료!!"); location.href="//khs.com/phptest/ClassRoom/home";</script>';
    } else {
        //echo $sql;
        echo '<script>alert("이미 가입된 아이디입니다."); history.back();</script>';
    }
}
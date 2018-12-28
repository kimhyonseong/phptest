<?php
    session_start();
    if(!isset($_SESSION['is_login']))
    {
        header('Location: ./index.php?F=login');
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    #include_once 'php/DBconnect.php';
    #include_once 'member/Login.php';
    echo $_SESSION['user']."님 환영합니다.<br>";
?>

<input type="button" onclick="location.href='member/Withdrawal.php'" value="회원탈퇴">
<input type="button" onclick="location.href='member/LogOut.php'" value="로그아웃">
</body>
</html>
<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 2:00
     */
    session_start();
    if(isset($_SESSION['login']))
    {
        echo '<script>alert("OK화면 임 여기 에러인듯");</script>';
    }
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Ok</title>

</head>
<body>
<header>
    <?php
        if(isset($_SESSION['login']))
        {
            include_once __DIR__.'/header/Login_header.php';
        }
        else
        {
            include_once __DIR__.'/header/header.php';
        }
    ?>
</header>
<article>
    <br><br><br><br><br><h1>가입완료</h1><br><input type="button" onclick="location.href='<?=$_SERVER['QUERY_STRING']; # 물음표 뒤에 이전 페이지 정보를 넣어서 쿼리스트링으로 뒤에 쿼리만 가져옴?>'" value="이전페이지로">
</article>
</body>
</html>

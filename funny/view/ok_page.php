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
        header("Location: main.php");
    }
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            background-image: url("https://wallpapercave.com/wp/wp2037149.jpg");
        }
    </style>
</head>
<body>
회원가입 완료
<input type="button" onclick="location.href='<?=$_SERVER['QUERY_STRING']; # 물음표 뒤에 이전 페이지 정보를 넣어서 쿼리스트링으로 뒤에 쿼리만 가져옴?>'" value="이전페이지로">
</body>
</html>

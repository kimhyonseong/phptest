<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 2:00
     */
    session_start();
    if($_SESSION['login']==true)
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
</body>
</html>

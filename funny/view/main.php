<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 2:01
     */
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../CSS/header.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../CSS/header.css" rel="stylesheet">
    <link href="../CSS/search.css" rel="stylesheet">
    <link href="../CSS/content.css" rel="stylesheet">
</head>
<body>
<header>
    <?php
        if(isset($_SESSION['login']))
        {
            # 로그인 했으면
            include_once 'header/Login_header.php';
        }
        else
        {
            # 로그인 안했으면
            include_once 'header/header.php';
        }
    ?>
</header>
<article class="content_center">
    <br><br><br><br><br><br>
    <form method="get" action="search.php">
        <input type="text" class="search_box" name="KeyWord" placeholder="search">
        <a href="search.php?KeyWord=all">모든 색깔 보기</a>
    </form>
</article>
</body>
</html>

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
    <title>Main</title>
    <link rel="stylesheet" href="../CSS/header.css">
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
    <?php
        include_once __DIR__.'/search_box/search_box.php';
    ?>
</article>
</body>
</html>

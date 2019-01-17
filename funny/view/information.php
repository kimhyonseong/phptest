<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-16
     * Time: 오후 1:50
     */
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Information</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../CSS/header.css?b" rel="stylesheet">
    <link href="../CSS/search.css" rel="stylesheet">
    <link href="../CSS/content.css?" rel="stylesheet">
</head>
<body>
<header class="fixed_header">
    <?php
        if (isset($_SESSION['login']))
            include_once __DIR__.'/header/Login_header.php';
        else
            include_once __DIR__.'/header/header.php';
    ?>
</header>
<nav class="content_center">
    <br><br><br><br>
    <?php
        include_once __DIR__ . '/search_box/search_box.php';
    ?>
</nav>
<article>
    <?php
        include_once __DIR__.'/../content/color_inf.php';
    ?>
</article>
</body>
</html>

<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-15
     * Time: 오후 9:49
     */
    session_start();
    if (!isset($_SESSION['login']))
    {
        header('Location: Login.php');
    }
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Evaluation</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../CSS/header.css" rel="stylesheet">
    <link href="../CSS/search.css" rel="stylesheet">
    <link href="../CSS/content.css" rel="stylesheet">
</head>
<body>
<header class="fixed_header">
    <?php
        include_once __DIR__.'/header/Login_header.php';
    ?>
</header>
<nav class="content_center">
    <?php
        include_once __DIR__.'/search_box/search_box.php';
    ?>
</nav>
<article>
    <?php

    ?>
</article>
</body>
</html>

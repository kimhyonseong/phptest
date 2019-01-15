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
    <br><br><br><br><br><br>
    <form method="get" action="search.php">
        <input type="text" class="search_box" name="KeyWord" placeholder="search">
    </form>
    <br>
</nav>
<article>
    <?php

    ?>
</article>
</body>
</html>

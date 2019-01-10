<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-10
     * Time: 오후 4:55
     */

    session_start();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <?php
        if(isset($_SESSION['login']))
            include_once __DIR__.'/header/Login_header.php';
        else
            include_once __DIR__.'/header/header.php';
        include_once __DIR__.'/../content/content.php';
    ?>
</header>
<nav>
    <br>
    <form method="get" action="search.php">
        <input type="text" name="KeyWord" value="<?=$_GET['KeyWord']?>"><input type="submit">
    </form>
    <br>
</nav>
<article>
    <?php

        while($search_result=mysqli_fetch_array($result)) {
            echo '<div style="width: 200px; height: 300px; border: black 1px solid; float: left; margin: 10px;">';
            echo '<div style="background-color: ' . $search_result['code'] . '; width: 150px; height: 200px;"></div>';
            echo '<div>' . $search_result['name'] . '</div>';
            echo '</div>';
            //var_dump($search_result['0']);
            //echo "<br>";
        }
    ?>
</article>
</body>
</html>
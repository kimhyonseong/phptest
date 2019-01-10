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
    ?>
</header>
<nav>
    <br>
    <form method="get" action="search.php">
        <input type="text" name="KeyWord" placeholder="search"><input type="submit">
    </form>
    <br>
</nav>
<article>

</article>
</body>
</html>
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
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../CSS/header.css" rel="stylesheet">
    <link href="../CSS/search.css" rel="stylesheet">
    <link href="../CSS/content.css" rel="stylesheet">
    <script>
        function order(self) {
            //버튼 값 바뀌면서 오름차순 내림차순 바뀌게 하기
            if (self.value === '밝은색 정렬')
            {
                self.value = '어두운색 정렬';

            }
            else if (self.value === '어두운색 정렬')
            {
                self.value = '밝은색 정렬';
            }
        }
    </script>
</head>
<body>
<header class="fixed_header">
    <?php
        if(isset($_SESSION['login']))
            include_once __DIR__.'/header/Login_header.php';
        else
            include_once __DIR__.'/header/header.php';

    ?>
</header>
<nav class="content_center">
    <br><br><br><br><br><br>
    <form method="get" action="search.php">
        <input type="text" class="search_box" name="KeyWord" placeholder="search" value="<?=$_GET['KeyWord']?>">
    </form>
    <br>
</nav>
<article class="content_center">
    <?php
        include_once __DIR__.'/../content/content.php';
    ?>
</article>
</body>
</html>
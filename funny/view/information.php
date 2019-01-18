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
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="../CSS/header.css?b" rel="stylesheet">
    <link href="../CSS/search.css" rel="stylesheet">
    <link href="../CSS/content.css?jh" rel="stylesheet">
    <script>
        function len_char() {
            //var ABC = document.getElementById();

            //console.log(ABC);
        }
        function change_img(num) {
            var i;

            if (document.getElementsByName('score')[0].value.match(num))    //같은 별 눌렀을때
            {
                document.getElementsByName('score')[0].value=0;

                for(i=1;i<=5;i++) {       //모든 별 꺼지기
                    var star = document.getElementsByName('star'+i)[0];
                    star.src = "img/star1.png";
                }
            }
            else
            {
                document.getElementsByName('score')[0].value = num;

                for (i = 1; i <= 5; i++) {
                    var star = document.getElementsByName('star' + i)[0];
                    console.log(star.name);

                    if (i <= num)                   //누른 숫자까지 노란색
                        star.src = "img/star2.png";
                    else
                        star.src = "img/star1.png";
                }
            }
            console.log(document.getElementsByName('score')[0].value);
        }
    </script>
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

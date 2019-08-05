<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-25
 * Time: 오전 10:07
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/phptest/ClassRoom/glob.inc.php';

$cip = new cipherClass();

$userId = $cip->decrypt($_COOKIE['userId']);

if ($userId != '') {
    //echo $userId.'님 환영합니다.';
    //$_COOKIE['user'] = '';

} else {
    echo '<script>alert("로그인이 필요합니다"); location.href="member/login.php"</script>';
    exit();
    //header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            margin: 0 auto;
            width: 800px;
            height: 500px;
            position: relative;
            border: 1px blue solid;
        }

        header {
            position: relative;
            background-color: #A6B2BE;
            width: 100%;
            height: 50px;
        }

        .log {
            position: relative;
            border: none;
            background-color: white;
            float: right;
            font-size: large;
        }

        div {
            position: relative;
            border: 1px solid black;
        }

        #visitor {
            width: 50px;
            float: left;
        }
    </style>
</head>
<body>
<header>
    <div>

    </div>
    <div style="height: 100%; width: 200px; float: right;">
        <div id="visitor"></div>
        <input type="button" class="log" id="log_out" value="로그아웃">
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $('#log_out').click(function () {
            location.href = 'member/logout.php';
        });
    </script>
</header>
<script>
    $(document).ready(

    );

    $(function () {
        function Visitor() {
            $.ajax({
                url: 'DB/visitor_live.php',

                success: function (data) {
                    //alert(data);
                    $('#visitor').text(data);
                }
            });
        }

        Visitor();

        setInterval(Visitor,3000);
    });
</script>
</body>
</html>
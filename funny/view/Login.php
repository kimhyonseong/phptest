<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 2:07
     */
    session_start();
    if($_SESSION['login'] == true)
    {
        header('Location: ../view/main.php');
    }
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            background-image: url("https://wallpapercave.com/wp/wp2037149.jpg");
            -webkit-background-size: cover;
            text-align: center;
            display: inline;
        }
        form{
            padding: 3%;
            border: 1px solid black;
            height: 400px;
            width: 500px;
            background-color: #FFFFF0;
            margin: auto;
        }
        input{
            height: 30px;
            width: 200px;
            margin-bottom: 15px;
            border-radius: 7px 7px 7px 7px;
            border: gray 1px solid;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            font-size: 15px;
        }
        .button1 {
            margin-right: 10px;
        }
        .button {
            width: 100px;
            height: 40px;
            text-align: center;
            padding-left: 2px;
        }
    </style>
</head>
<body>
<article>
    <form method="post" action="../member/login.php">
        <div><h1>Log in</h1></div>
        <div>
            <input type="text" name="ID" id="ID" placeholder="ID">
        </div>
        <div>
            <input type="password" name="pwd" id="pwd" placeholder="Password">
        </div>
        <div>
            <input type="submit" class="button1 button" value="Next" style="width: 200px">
        </div>
        <div>
            <input type="button" class="button" value="Find ID or PW" style="font-size: 13px;" onclick="location.href=''">
            <input type="button" class="button" value="Join" onclick="location.href='SignUp.php'">
        </div>
    </form>
</article>
</body>
</html>

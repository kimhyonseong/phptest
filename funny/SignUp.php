<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:57
     */
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style>
        body {
            background-image: url("https://wallpapercave.com/wp/wp2037149.jpg");
            -webkit-background-size: cover;
            display: inline;
            font-family: 'Fredericka the Great', cursive;
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
        #pw input{
            width: 90px;
        }
        #check {
            height: 35px;
            width: auto;
            text-align: center;
        }
        #E-mail input {
            width: 150px;
        }
        #submit {
            width: 100px;
            height: 40px;
            text-align: center;
        }
    </style>
    <script>
        function check() {
            alert('되니?');
            //window.open("member/ID_ch.php","","width=100,height=100");
        }
    </script>
</head>
<body>
<div>
    <form action="member/join.php" method="post">
        <div>
            <h1>Join us</h1>
            <p>Please fill in the box.</p>
            <div>
                <input type="text" name="name" id="name" placeholder="Name" onfocus="">
            </div>
            <div>
                <input type="text" name="ID" id="ID" placeholder="ID">
                <input type="button" id="check" onclick="window.open('member/ID_ch.php','','width=500,height=100');" value="ID check">
            </div>
            <div id="pw">
                <input type="password" name="pwd" placeholder="Pwd">
                <input type="password" name="pwd_ch" placeholder="Pwd_check">
            </div>
            <div id="E-mail">
                <input type="text" name="E-mail1" id="E-mail1" placeholder="E-mail">
                @
                <input type="text" name="E-mail2" id="E-mail2" placeholder="Domain">
            </div>
            <input type="submit" id="submit" value="Next">
        </div>
    </form>
</div>
</body>
</html>

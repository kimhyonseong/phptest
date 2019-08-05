<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-25
 * Time: 오전 10:08
 */

include_once '../glob.inc.php';

//echo 'login directory<br>자동 쿠키 생성';

//setcookie("user",'khs,김현성,사원',time()+600,'/');
//mail()
?>
<!--<input type="button" onclick="location.href='../home'" value="이동">-->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        .warning{
            color: red;
        }
    </style>
</head>
<body>
<form method="post" id="form" action="../DB/login.php">
    <input type="text" name="id" id="id" placeholder="ID"><br>
    <span class="warning" id="idMsg" style="display: none"></span>
    <input type="password" name="pw" id="pw" placeholder="Password"><br>
    <span class="warning" id="pwMsg" style="display: none"></span>
    <input type="button" id="logIn" value="login">
    <input type="button" onclick="location.href='signup.php'" value="signUP">
</form>
<script>
    $(function () {
        let complete = 1;

        $('#logIn').click(function () {
            if (!$('#id').val() || !$('#pw').val()) {
                complete = 0;
                if(!$('#id').val()) {
                    $('#idMsg').text('아이디를 입력해주세요.').css('display','block');
                } else {
                    $('#idMsg').text('').css('display','none');
                }
                if (!$('#pw').val()) {
                    complete = 0;
                    $('#pwMsg').text('비밀번호를 입력해주세요.').css('display','block');
                } else {
                    $('#pwMsg').text('').css('display','none');
                }
            } else {
                complete = 1;
            }

            if (complete === 1) {
                $('#form').submit();
            } else {
                return false;
            }
        });
    });
</script>
</body>
</html>
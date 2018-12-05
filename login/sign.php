<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
        body {text-align: center;}
        #menu {text-align: right;}
        #menu li{display: inline-block; border-left: black solid 1px; padding:0 10px;}
        #menu li:last-child{border-right: black 1px solid;}
        body article table {width: 350px; height: 100px; margin: auto;}
    </style>
    <script>
        function check() {
            var ud = document.getElementById("id").value;
            if(ud){
              window.open("check.php?id="+ud,"","width=300,height=100");
            }
            else alert("아이디를 입력하세요");
        }
    </script>
</head>
<body>
<header>
    <a href="index.php"><h1>HS site</h1></a>
</header>
<nav>
    <ul id="menu">
        <li><a href="http://localhost/firststorm/login/sign.php">회원가입</a></li>
        <li><a href="http://localhost/firststorm/login/login.php">로그인</a></li>
    </ul>
</nav>
<article>
    <form method="post" action="sign_ok.php">
        <table  border="0" cellpadding="2" cellspacing="2">
            <tr><td>ID</td><td><input type="text" name="id" id="id" title="id"/></td><td><input type="button" value="중복확인" onclick="check()"></td></tr>
            <tr><td>password</td><td><input type="text" name="pw" id="pw" title="pw"/></td></tr>
            <tr><td>email</td><td><input type="text" name="email" id="email" title="email"/></td></tr>
        </table>
        <input type="submit" value="가입"> <input type="reset" value="삭제">
    </form>
</article>
</body>
</html>
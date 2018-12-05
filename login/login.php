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
    <form method="post" action="log_ok.php">
        <table border="0" cellpadding="2" cellspacing="2">
            <tr><td>ID</td><td><input type="text" name="id" id="id" title="id"/></td></tr>
            <tr><td>password</td><td><input type="text" name="pw" id="pw" title="pw"/></td></tr>
        </table>
        <input type="submit" value="로그인"> <input type="reset" value="삭제">
    </form>
</article>
</body>
</html>
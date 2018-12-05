<?php
    $conn=mysqli_connect("localhost","root","","lon");

    $ID=htmlspecialchars($_POST['id']);
    $query1="select * from imf where id =\"$ID\"";
    //$sql=mysqli_query($conn,$query1.$ID);
    $find = $conn->query($query1);
    $member = $find->fetch_assoc();

    $id=$_POST['id'];
    $pw=$_POST['pw'];
    $email=$_POST['email'];

    if($id==null || $pw==null || $email==null)
    {
        echo "<script>alert(\"빈칸을 채워주세요\");history.back();</script>";
    }

    else if ($member==0){
        $query2 = sprintf("insert into imf(id,pw,email) values('%s','%s','%s')",mysqli_escape_string($conn,$id),mysqli_real_escape_string($conn,$pw),mysqli_escape_string($conn,$email));
        mysqli_query($conn,$query2);
    }

    else{
        echo "<script>alert(\"중복된 아이디입니다.\");history.back();</script>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {text-align: center;}
        #menu {text-align: right;}
        #menu li{display: inline-block; border-left: black solid 1px; padding:0 10px;}
        #menu li:last-child{border-right: black 1px solid;}
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
<h2>가입이 완료되었습니다.</h2>
<a href="index.php">확인</a>
</body>
</html>


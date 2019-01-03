<?php
    require_once 'check.php';
    $conn = mysqli_connect("localhost","root","","lon");
    if ($conn->connect_error) die($conn->connect_error);

    $ID=mysqli_real_escape_string($conn,$_GET['id']);
    $query1="select id from imf where id ='$ID'";
    //$sql=mysqli_query($conn,$query1,1);
    //$find = $conn->query($query1);
    $find = mysqli_query($conn,$query1);
    $result = mysqli_fetch_array($find);
    //$member = $find->fetch_assoc();
    $member = $result['id'];
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>ID 중복확인</title>
    <style>
        body {text-align: center;}
    </style>
</head>
<body>
<?php
    if($member==NULL)
    {
        echo $ID."는 사용가능한 아이디입니다.";
        #var_dump($member);
    }
    else echo "중복된 아이디입니다.";
?>
</body>
</html>
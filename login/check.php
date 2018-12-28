<?php
    require_once 'check.php';
    $conn = mysqli_connect("localhost","root","","lon");
    if ($conn->connect_error) die($conn->connect_error);

    $ID=htmlspecialchars($_GET['id']);
    $query1="select * from imf where id ='$ID'";
    //$sql=mysqli_query($conn,$query1,1);
    $find = $conn->query($query1);
    $member = $find->fetch_assoc();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {text-align: center;}
    </style>
</head>
<body>
<?php
    if($member==0) echo $ID."는 사용가능한 아이디입니다.";//var_dump($sql);
    else echo "중복된 아이디입니다.";
?>
</body>
</html>
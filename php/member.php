<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
    <?php
        /**
         * Created by PhpStorm.
         * User: KimHyonSeong
         * Date: 2018-11-05
         * Time: 오후 3:30
         */
    //require_once 'member.php';
    $id = $_POST['아이디'];  //name이 들어감
    $pw = $_POST['비밀번호'];
    $email = $_POST['이메일'];
    $name = $_POST['이름'];
    $phone = $_POST['전번'];

    $con = mysqli_connect("localhost","root","","sign");
    //$mysqli = new mysqli('localhost','root','','sign');
    //mysqli_select_db($mysqli,"imf");
    if ($con->connect_error) die($con->connect_error);

    if(isset($id)&&isset($name)){
        
    }
    ?>
</body>
</html>

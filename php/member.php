
    <?php
        /**
         * Created by PhpStorm.
         * User: KimHyonSeong
         * Date: 2018-11-05
         * Time: 오후 3:30
         */
    require_once 'member.php';
    $id = $_POST['아이디'];  //name이 들어감
    $pw = $_POST['비밀번호'];
    $email = $_POST['이메일'];
    $name = $_POST['이름'];
    $phone = $_POST['전번'];

    $con = mysqli_connect("localhost","root","","sign");
    //$mysqli = new mysqli('localhost','root','','sign');
    //mysqli_select_db($mysqli,"imf");

    mysqli_query($con,"set session character_set_connection=utf8;");
    mysqli_query($con,"set session character_set_results=utf8;");
    mysqli_query($con,"set session character_set_client=utf8;");

    if ($con->connect_error) die($con->connect_error);

    if(isset($id)&&
        isset($pw)&&
        isset($name)&&
        isset($email)&&
        isset($phone)    )
    {
        //if() //id 같으면 추가 못하게
        $query = "INSERT INTO imf(id,pw,name,email,phone) VALUES('$id','$pw','$name','$email','$phone')";
        $result = $con->query($query);
        echo $name ."님 정보가 추가 되었습니다.";
    }
    if(!$result) die("Database access fail: ".$con->error);

    ?>


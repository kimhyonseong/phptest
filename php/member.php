
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

    function mysql_fix_string($con, $string)
    {
        if(get_magic_quotes_gpc()) $string = stripcslashes($string);
        return mysqli_real_escape_string($con,$string);
    }
    $query1 ="SELECT * FROM imf WHERE id = \"$id\"";
    $check = $con->query($query1);
    $check->data_seek(0);
    $real_ID = $check->fetch_assoc()['id'];
    if($id==NULL || $name==NULL || $email==NULL || $phone==NULL || $pw==NULL) echo "빈칸을 채워주세요.<br>";
    else if(strpos($id," ")!==false) echo "ID에 공백을 제거해주세요.<br>";
    else if(strpos($name," ")!==false) echo "이름에 공백을 제거해주세요.<br>";
    else if(isset($id)&&isset($pw)&&isset($name)&&isset($email)&&isset($phone)    )
    {
        if($real_ID == $id) //id 같으면 추가 못하게
        {
            echo "이미 가입되어있는 아이디입니다.";
        }
        else {
            $query1 = "INSERT INTO imf(id,pw,name,email,phone) VALUES(\"$id\",\"$pw\",\"$name\",\"$email\",\"$phone\")";
            $result = $con->query($query1);

            echo $name . "님, 가입이 완료되었습니다.<br>";
        }
    }
    //if(!$result) die("Database access fail: ".$con->error);

    ?>


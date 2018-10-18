<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-17
     * Time: 오후 2:06
     */
    $id =$_POST["id"];
    $pw=$_POST["pw"];
    if ($id=="Red" && $pw =="1234") {
        echo "LogIn success <br>";
    }
    else echo "LogIn Fail<br>";
?>

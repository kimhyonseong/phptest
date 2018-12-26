<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-26
     * Time: 오후 1:30
     */
    include 'DBconnect.php';
    include 'specialSTR.php';

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $real_id = mysqli_real_escape_string($con,$id);
    $real_pw = mysqli_real_escape_string($con,$pw);

    $Login_query = "select id,pw from imf";
    //관계배열로 아이디랑 패스워드 묶어서 확인하고 로그인하기

    ?>
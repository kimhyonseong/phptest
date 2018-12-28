<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-26
     * Time: 오후 1:30
     */
    session_start();
    include_once  __DIR__.'/../php/DBconnect.php';
    include_once 'specialSTR.php';

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $real_id = mysqli_real_escape_string($con,$id);
    $real_pw = mysqli_real_escape_string($con,$pw);

    $Login_query = "select id,pw,user from imf where id='$real_id'";
    //관계배열로 아이디랑 패스워드 묶어서 확인하고 로그인하기
    $Login_result = mysqli_query($con,$Login_query);
    $Login = mysqli_fetch_array($Login_result);
    $Login_id = $Login['id'];
    $Login_pw = $Login['pw'];
    $Login_user = $Login['user'];

    if($real_id == $Login_id && $real_pw == $Login_pw) #세션 추가
    {
        //여기 뭘 써야될지 모르겠음;;
        $_SESSION['is_login'] = true; #로그인 상태인지 확인하는 것
        $_SESSION['user'] = $Login_user; #user로 세션 구분
        header('Location: ../log_ok.php');
    }

    else
    {
        $msg = "아이디 또는 비밀번호를 확인해주세요.";
        echo "<script>alert('$msg'); history.back(); </script>";
    }
    ?>
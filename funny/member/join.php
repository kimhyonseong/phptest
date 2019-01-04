<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:51
     */
    //include_once __DIR__.'/../DBconnect/DBconnect.php';
    $special = "/[~!@#$%^&*()_\-\+\=\\\'\"\<>,\.\|;:`\/]/";  //특수문자 패턴

    $real_name = mysqli_real_escape_string($DB_connect,$_POST['name']);
    $real_pwd = mysqli_real_escape_string($DB_connect,$_POST['pwd']);
    $real_pwd_ch = mysqli_real_escape_string($DB_connect,$_POST['pwd_ch']);
    $real_Email1 = mysqli_real_escape_string($DB_connect,$_POST['E-mail1']);
    $real_Email2 = mysqli_real_escape_string($DB_connect,$_POST['E-mail2']);
    $E_mail = $real_Email1 . mysqli_real_escape_string($DB_connect,"@") . $real_Email2;
    $real_ID = mysqli_real_escape_string($DB_connect,$_POST['ID']);

    if( $real_ID==null || $real_pwd==null || $real_Email1==null || $real_Email2==null || $real_pwd_ch==null || $real_name==null)
    {
        $msg = "빈칸을 채워주세요.";
        echo "<script>alert('$msg')</script>";
    }

    else if(preg_match($special,$_POST['ID']) || preg_match($special,$_POST['name'])) # 특수문자 확인
    {
        $msg = "이름 또는 ID에 특수문자 사용이 제한됩니다.";
        echo "<script> alert('$msg'); history.back();</script>";
    }

    else if($real_pwd != $real_pwd_ch) # 비밀번호와 확인번호가 다를시
    {
        $msg = "비밀번호와 비밀번호 확인이 일치하지 않습니다.";
        echo "<script>alert('$msg'); history.back();</script>";
    }
    else if() # 아이디 같은거 확인
    {

    }

    else
    {

    }
?>
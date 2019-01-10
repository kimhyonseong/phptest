<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:51
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';
    include_once __DIR__.'/member.php';

    if( $real_ID==null || $real_pwd==null || $real_Email1==null || $real_Email2==null || $real_pwd_ch==null || $real_name==null) # 비었을시
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
    else if($real_ID == $member['ID']) # 아이디 중복 확인
    {
        $msg = "이미 사용중인 ID 입니다.";
        echo "<script>alert('$msg'); history.back();</script>";
    }

    else
    {
        $insert_query = "INSERT INTO member(ID,name,pwd,Email) VALUES('$real_ID','$real_name','$real_pwd','$E_mail')";
        mysqli_query($DB_connect,$insert_query);
        header('Location: ../view/ok_page.php?'.$pre_page); # 'pre_page'에 이전 주소 담겨있음
    }
?>
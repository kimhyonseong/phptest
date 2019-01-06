<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:52
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';
    include_once 'member.php';
    session_start();

    if ($real_ID==null || $real_pwd==null)
    {
        $msg = "빈칸을 채워주세요.";
        echo "<script>alert('$msg'); history.back(); </script>";
    }

    else if($member['ID'] == $real_ID && $member['pwd'] == $real_pwd) # 같으면 로그인
    {
        $_SESSION['login']=true;
        $_SESSION['name']=$real_name;
        header('Location: ../view/ok_page.php'); # 페이지 이동
    }

    else # 다르면 경고문
    {
        $msg = "ID와 Password를 확인해주세요.";
        echo "<script>alert('$msg'); history.back();</script>";
    }
    ?>
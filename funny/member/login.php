<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:52
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';
    include_once __DIR__.'/member.php';
    session_start();

    $pre_page = $_POST['prePage'];  # 로그인 했던 페이지

    if ($real_ID==null || $real_pwd==null)  # 로그인시 빈칸일 경우
    {
        $msg = "빈칸을 채워주세요.";
        echo "<script>alert('$msg'); history.back(); </script>";
    }

    else if($member['ID'] == $real_ID && $member['pwd'] == $real_pwd) # 같으면 로그인
    {
        $_SESSION['login']=true;        # 로그인 세션 생성
        $_SESSION['id']=$real_ID;   # 이름으로 사용자 구분
        #header('Location: '.$_SERVER['HTTP_REFERER']);
        header('Location: '.$pre_page); # 로그인 했던 페이지로 이동
    }

    else # 다르면 경고문
    {
        $msg = "ID와 Password를 확인해주세요.";
        echo "<script>alert('$msg'); history.back();</script>";
    }
    ?>
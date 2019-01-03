<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-29
     * Time: 오전 4:57
     */
    session_start();
    include_once __DIR__.'/../php/DBconnect.php';

    if (!isset($_SESSION['name']))
    {
        header('Location: ../index.php?F=login');
    }

    else
    {
        $delete_user = "DELETE FROM imf where name = '" . $_SESSION['name'] . "'";
        mysqli_query($con,$delete_user);
        session_destroy();
        echo "<script>alert('회원탈퇴 완료'); location.href='../index.php'</script>";
    }
    ?>
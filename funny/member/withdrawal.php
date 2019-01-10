<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 6:52
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';
    session_start();

    mysqli_query($DB_connect,"DELETE FROM member WHERE name='". $_SESSION['name'] ."'");
    session_destroy();
    header('Location: ../view/main.php'); #이전 페이지로 이동
    ?>
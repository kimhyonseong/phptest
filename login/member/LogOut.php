<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-29
     * Time: 오전 4:24
     */
    session_start();
    session_destroy();
    echo "<script>alert('로그아웃 되었습니다.'); document.location.href='/../index.php';</script>";
    #header('Location: ../index.php');  이거로 하면 경고창 나오지도 않고 바로 돌림
    ?>
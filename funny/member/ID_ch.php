<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-04
     * Time: 오후 10:09
     */
    include_once __DIR__ . '/../DBconnect/DBconnect.php';

    $ID = mysqli_real_escape_string($DB_connect,$_GET['ID']);

    $query = "SELECT ID FROM member WHERE ID='$ID'";
    $result = mysqli_query($DB_connect,$query);
    $check = mysqli_fetch_array($result);

    if($check['ID']==null)
    {
        $msg = "사용 가능한 ID 입니다.";
        //echo "<script>alert('$msg'); window.close();</script>";
        var_dump($check['ID']);
    }
    else
    {
        $msg = "중복된 ID 입니다.";
        echo "<script>alert('$msg'); window.close();</script>";
    }
    ?>
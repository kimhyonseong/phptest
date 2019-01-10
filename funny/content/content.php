<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-10
     * Time: 오후 6:30
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';

    $key_word = mysqli_real_escape_string($DB_connect,$_GET['KeyWord']);
    $search = "select * from color where name like '%$key_word%' or code like '%$key_word%' or strong like '%$key_word%'";
    $result=mysqli_query($DB_connect,$search);
    //$search_result = mysqli_fetch_array($result);

    ?>
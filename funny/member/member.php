<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 3:01
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';

    $special = "/[~!@#$%^&*()_\-\+\=\\\'\"\<>,\.\|;:`\/]/";  //특수문자 패턴

    $real_name = mysqli_real_escape_string($DB_connect,$_POST['name']);
    $real_pwd = mysqli_real_escape_string($DB_connect,$_POST['pwd']);
    $real_pwd_ch = mysqli_real_escape_string($DB_connect,$_POST['pwd_ch']);
    $real_Email1 = mysqli_real_escape_string($DB_connect,$_POST['E-mail1']);
    $real_Email2 = mysqli_real_escape_string($DB_connect,$_POST['E-mail2']);
    $E_mail = $real_Email1 . mysqli_real_escape_string($DB_connect,"@") . $real_Email2;
    $real_ID = mysqli_real_escape_string($DB_connect,$_POST['ID']);

    $member_query=mysqli_query($DB_connect,"SELECT * FROM member WHERE ID='$real_ID'");
    $member = mysqli_fetch_array($member_query);
    ?>
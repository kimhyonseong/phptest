<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-11-29
     * Time: 오후 2:29
     */
    function db_init($host,$duser,$dpw,$dname)
    {
        $conn = mysqli_connect($host,$duser,$dpw);
        mysqli_select_db($conn, $dname);
        return $conn;
    }
    ?>

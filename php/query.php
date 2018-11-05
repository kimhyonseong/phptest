<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-11-05
     * Time: 오후 7:52
     */
    require_once 'query.php';
    $mysqli = mysqli_connect("localhost","root","","sign");

    mysqli_query($mysqli,"set session character_set_connection=utf8;");
    mysqli_query($mysqli,"set session character_set_results=utf8;");
    mysqli_query($mysqli,"set session character_set_client=utf8;");

    if ($mysqli->connect_error) die($mysqli->connect_error);
    $query = "SELECT * FROM imf";
    $result = $mysqli->query($query);

    if(!$result) die($mysqli->connect_error);
    $row = $result->num_rows;


    /*for($i=0; $i<$row;++$i) {
        $result->data_seek($i);
        echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>';
        $result->data_seek($i);
        echo 'ID: ' . $result->fetch_assoc()['id'] . '<br>';
        $result->data_seek($i);
        echo 'E-mail: ' . $result->fetch_assoc()['email'] . '<br>';
    }*/
    for ($i=0; $i<$row; ++$i){
        $result -> data_seek($i);
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Name: ' . $rows['name'] . '<br>';
        echo 'ID: ' . $rows['id'] . '<br>';
        echo 'E-mail: ' . $rows['email'] . '<br><br>';
    }
    $result->close();
    $mysqli->close();
    ?>
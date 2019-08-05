<?php
/**
 * Created by PhpStorm.
 * User: 김현성
 * Date: 2019-07-30
 * Time: 오전 9:49
 */
class dbClass{

    public $conn;

    function dbOpen($dbName){
        $mysql_user = array('localhost', 'root', 'khs3326', $dbName);

        $this->conn = mysqli_connect($mysql_user[0],$mysql_user[1],$mysql_user[2],$mysql_user[3]);
    }

    function queryDB($sql){
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }

    function fetchDB($result){
        $data = mysqli_fetch_array($result);
        return $data;
    }

    function escapeStr($str){
        $escapeStr = mysqli_escape_string($this->conn,$str);
        return$escapeStr;
    }

    function closeDB(){
        mysqli_close($this->conn);
    }
}

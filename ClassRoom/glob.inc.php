<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-25
 * Time: 오전 10:11
 */

if (isset($_COOKIE['user'])) {
    $user_info = explode(",", $_COOKIE['user']);

    $user_id = $user_info[0];
    $user_nm = $user_info[1];
    $user_cs = $user_info[2];
} else {
    $user_id = '';
}

include_once 'lib/class/dbClass.php';
include_once 'lib/class/cipherClass.php';
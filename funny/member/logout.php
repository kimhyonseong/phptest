<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-08
     * Time: 오후 2:34
     */
    session_start();
    session_destroy();
    header('Location: '.$_SERVER['HTTP_REFERER']); #이전 페이지로 돌아가기
    ?>


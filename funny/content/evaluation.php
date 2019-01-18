<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-17
     * Time: 오후 8:47
     */

    session_start();
    if (!isset($_SESSION['login']))
    {
        header('Location: ../view/Login.php');
    }
    include_once __DIR__.'/../DBconnect/DBconnect.php';
    $score = mysqli_real_escape_string($DB_connect,htmlspecialchars($_POST['score']));
    $id = mysqli_real_escape_string($DB_connect,htmlspecialchars($_SESSION['id']));
    $comment = mysqli_real_escape_string($DB_connect,htmlspecialchars($_POST['coment']));
    $color = mysqli_real_escape_string($DB_connect,htmlspecialchars($_POST['color']));
    //echo $id;

    $already = mysqli_query($DB_connect,"select * from $color where ID='$id'"); //이미 평가한 사람은 갱신으로 빠지기
    $Person = mysqli_fetch_array($already);

    if ($Person['ID'] == null)
    {
        mysqli_query($DB_connect,"insert into $color(ID,score,coment) values('$id','$score','$comment')");
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else
    {
        mysqli_query($DB_connect,"update $color set score='$score', coment='$comment' where ID='$id'");
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    ?>
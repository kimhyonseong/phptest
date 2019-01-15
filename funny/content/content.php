<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-10
     * Time: 오후 6:30
     */
    include_once __DIR__.'/../DBconnect/DBconnect.php';

    $key_word = mysqli_real_escape_string($DB_connect,$_GET['KeyWord']);

    if ($key_word=='all')
    {
        //echo 'all';
        $search = "select * from color order by code desc";
        $result=mysqli_query($DB_connect,$search);

        while($search_result=mysqli_fetch_array($result)) {
            echo '<div class="content">';
            echo '<div style="background-color: ' . $search_result['code'] . '; width: 150px; height: 200px; margin: auto"></div>';
            echo '<div>' . '<a href="evaluation.php?color='.$search_result['name'].'">' . $search_result['name'] . "</a>" .'</div>';
            echo '</div>';
        }
    }
    else if ($key_word == null)
    {
        $search = '';
        echo "''에 대한 색상이 없습니다.";
    }
    else
    {
        $search = "select * from color where name like '%$key_word%' or code like '%$key_word%' or tag like '%$key_word%' order by code desc";
        $result=mysqli_query($DB_connect,$search);

        while($search_result=mysqli_fetch_array($result)) {
            echo '<div class="content">';
            echo '<div style="background-color: ' . $search_result['code'] . '; width: 150px; height: 200px; margin: auto"></div>';
            echo '<div>' . '<a href="evaluation.php?color='.$search_result['name'].'">' . $search_result['name'] . "</a>" .'</div>';
            echo '</div>';
        }
    }
    //$search_result = mysqli_fetch_array($result); # 여기서 사용하면 1 다음에 또 사용하면 2부터 실행
    ?>
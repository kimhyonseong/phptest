<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-16
     * Time: 오후 1:55
     */
    //echo "<br><br><br><br><br><br>";
    echo '<form method="get" action="search.php">';
    if(isset($_GET['KeyWord']))
        echo '<input type="text" class="search_box" name="KeyWord" placeholder="search" value="'.$_GET['KeyWord'].'">'; // # 들어가면 인식못함
    else
        echo '<input type="text" class="search_box" name="KeyWord" placeholder="search">';
    echo '<br><a href="search.php?KeyWord=all">모든 색깔 보기</a>';
    echo '</form>';
    echo '<br>';
    ?>
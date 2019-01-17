<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-16
     * Time: 오후 5:22
     */

    include_once __DIR__.'/../DBconnect/DBconnect.php';

    $color_get = mysqli_real_escape_string($DB_connect,htmlspecialchars($_GET['color']));

    //검색 겟 받아서 셀렉 돌림
    // -> 겟 건들여서 셀렉이 안나옴
    $result_color_ev = mysqli_query($DB_connect,"select * from $color_get");  //컬러 평가한 사람들과 점수들
    $result_color_inf = mysqli_query($DB_connect,"select * from color where table_name='$color_get'");  //컬러 정보
    $show_table = mysqli_query($DB_connect,"show tables where Tables_in_color='$color_get'");
    $table = mysqli_fetch_array($show_table);

    if ($color_get == null)
    {
        echo '<div class="inf_box content_center" style="border: 1px solid black"><div class="error_box"><h1>컬러색이 입력되지 않았습니다.</h1></div></div>';
    }

    else if ($color_get==$table['Tables_in_color'])      //정상 내용 - 테이블 이름이 있다면 출력
    {
        $color_inf = mysqli_fetch_array($result_color_inf);
        $color_ev =mysqli_fetch_array($result_color_ev);

        echo '<div class="inf_box">';
        echo '<div class="inf_color_box">';
        echo '<div class="inf_color_box_in" style="background-color: '.$color_inf['code'].'"></div>' ;
        echo '</div>';

        echo '<div class="inf_text_box">';
        echo '<div class="inf_text_box_in" style="border: 1px solid '.$color_inf['code'].';">';
        echo "<h3>색상 이름</h3>".$color_inf['name']."<br><h3>색상 코드</h3>".$color_inf['code']."<br><h3>태그</h3>".$color_inf['tag'];
        echo '</div>';
        echo '</div>';

        echo '<div class="color_evaluation">';
        echo '<br>';
        echo '평점 : X.X점 ';
        echo '<input type="button" value="평가"> ';
        echo '<input type="button" value="평가"> ';
        echo '<input type="button" value="평가"> ';
        echo '<input type="button" value="평가"> ';
        echo '<input type="button" value="평가"> ';
        echo '</div>';
        echo '</div>';
    }
    //임의로 건들였을때 또는 잘못된 주소
    else
    {
        echo '<div class="inf_box content_center" style="border: 1px solid black"><div class="error_box"><h1>컬러색이 존재하지 않습니다.</h1></div></div>';
    }
    ?>
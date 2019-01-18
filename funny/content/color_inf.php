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
    $result_color_avg = mysqli_query($DB_connect,"select avg(score) from $color_get");
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
        $color_avg =mysqli_fetch_array($result_color_avg);

        echo '<div class="inf_box">';
            echo '<div class="inf_color_box">';
                echo '<div class="inf_color_box_in" style="background-color: '.$color_inf['code'].'"></div>' ;
            echo '</div>';

            echo '<div class="inf_text_box">';
                echo '<div class="inf_text_box_in" style="border: 1px solid '.$color_inf['code'].';">';
                echo "<h3>색상 이름</h3>".$color_inf['name']."<br><h3>색상 코드</h3>".$color_inf['code']."<br><h3>태그</h3>".$color_inf['tag'];
                echo '</div>';
            echo '</div>';

            echo '<form method="post" action="../content/evaluation.php">';
            echo '<div class="color_evaluation">';

        if ($color_avg['avg(score)']==null)
            echo '<h1>누구에게도 평가 되지 않았습니다!!<h1> ';
        else
            echo "<h1>평점 : ". substr($color_avg['avg(score)'],0,4) . "점</h1> "; //소수 두째자리까지 보이기

                echo '<img src="img/star1.png" name="star1" class="star" onclick="change_img(1);"> ';
                echo '<img src="img/star1.png" name="star2" class="star" onclick="change_img(2);"> ';
                echo '<img src="img/star1.png" name="star3" class="star" onclick="change_img(3);"> ';
                echo '<img src="img/star1.png" name="star4" class="star" onclick="change_img(4);"> ';
                echo '<img src="img/star1.png" name="star5" class="star" onclick="change_img(5);">';
            echo '</div>';
        echo '</div>';
        echo '<div style="left: 30%; position: relative; width: 40%; text-align: center"><div style="float: left">Comment</div><br>';
            echo '<textarea style="resize: none; width: 80%; height: 50px; font-size: 20px;" name="coment" onkeyup="len_char();"></textarea></div>';
        echo '<div style="left: 30%; position: relative; width: 40%; text-align: center">';
            echo '<input type="hidden" name="score" value="0">';
            echo '<input type="submit" class="sum" style="" value="평가하기!!">';
        echo '</div>';
        echo '</form>';
        echo '<div style="height: 150px"></div>';
    }

    //임의로 건들였을때 또는 잘못된 주소
    else
    {
        echo '<div class="inf_box content_center" style="border: 1px solid black"><div class="error_box"><h1>컬러색이 존재하지 않습니다.</h1></div></div>';
    }
    ?>
<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-16
     * Time: 오후 5:22
     */

    include_once __DIR__.'/../DBconnect/DBconnect.php';

    $color_get = mysqli_real_escape_string($DB_connect,htmlspecialchars($_GET['color']));

    if (isset($_SESSION['login']))
        $query_color_ev = mysqli_query($DB_connect,"select * from $color_get where ID='".$_SESSION['id']."'");      //로그인한 사람
    $query_color_ev_all = mysqli_query($DB_connect,"select * from $color_get");                                 //컬러 평가한 사람들과 점수들
    $result_color_avg = mysqli_query($DB_connect,"select avg(score) from $color_get");
    $result_color_count = mysqli_query($DB_connect,"select count(score) from $color_get");
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
        if (isset($_SESSION['login'])){
            $color_ev =mysqli_fetch_array($query_color_ev);
        }
        $color_avg =mysqli_fetch_array($result_color_avg);
        $color_ev_count = mysqli_fetch_array($result_color_count);
        echo '<div class="inf_box">';
            echo '<div class="inf_color_box">';
                echo '<div class="inf_color_box_in" style="background-color: '.$color_inf['code'].'"></div>' ;  //컬러 보이기
            echo '</div>';

            echo '<div class="inf_text_box">';
                echo '<div class="inf_text_box_in" style="border: 1px solid '.$color_inf['code'].';">';     //컬러 정보 보이기
                echo "<h3>색상 이름</h3>".$color_inf['name']."<br><h3>색상 코드</h3>".$color_inf['code']."<br><h3>태그</h3>".$color_inf['tag'];
                echo '</div>';
            echo '</div>';
            echo '<form method="post" action="../content/evaluation.php">';
            echo '<div class="color_evaluation">';

        if ($color_avg['avg(score)']==null)                                     //평가 내용 없을시
            echo '<h1>누구에게도 평가 되지 않았습니다!!<h1> ';
        else                                                                     //소수 두째자리까지 보이기
        {
            echo "<h1>평점 : ". substr($color_avg['avg(score)'],0,4) . "점</h1> ";
            echo $color_ev_count['count(score)']."명이 평가하였습니다."."<br>";
        }

        if (isset($_SESSION['login']) && $color_ev['score'] != null)                      //로그인 상태 시 자신이 평가한 별점 보여주기
        {
            for ($i=1; $i<=5; $i++)
            {
                if($i<=$color_ev['score'])
                    echo '<img src="img/star2.png" name="star'.$i.'" class="star" onclick="change_img('.$i.');"> ';
                else
                    echo '<img src="img/star1.png" name="star'.$i.'" class="star" onclick="change_img('.$i.');"> ';
            }
        }
        else                                                //비로그인상태, 평가 안했을 시 별 상태
        {
            for($i=1; $i<=5; $i++)
                echo '<img src="img/star1.png" name="star'.$i.'" class="star" onclick="change_img('.$i.');"> ';
        }
            echo '</div>';
        echo '</div>';
        echo '<div class="comment_box"><div style="float: left">Comment</div><br>';
            echo '<textarea class="textarea" name="coment" onkeyup="len_char(); "></textarea>';
        echo '<input type="submit" class="sum1" value="평가">';
        echo '</div>';
        echo '<div style="left: 30%; position: relative; width: 40%; text-align: center">';
            echo '<input type="hidden" name="score" value="0">';
            echo '<input type="hidden" name="color" value="'.$color_get.'">';
        echo '</div>';
        echo '</form>';
        while ($color_ev_all = mysqli_fetch_array($query_color_ev_all))
        {
            echo '<div class="comment_box" style="border: 1px solid #ccc; height: 70px; margin-bottom: 1px;">';
            //댓글 내용, 평가점수, ID
            echo '<div class="ID_box" style="border: #ccc 1px solid; position: absolute; top: 10%; left: 10%;">';
            echo $color_ev_all['ID'];
            echo '</div>';
            echo '<div class="ID_box" style="border: #ccc 1px solid; position: absolute; top: 10%; right: 10%;">';
            echo "평가한 점수: ".substr($color_ev_all['score'],0,1)."<br>";
            echo '</div>';
            echo '<div class="ID_box" style="border: #ccc 1px solid; position: absolute; top: 60%; left: 10%">';
            echo $color_ev_all['coment'];
            echo '</div>';
            echo '</div>';
        }

    }

    //임의로 건들였을때 또는 잘못된 주소
    else
    {
        echo '<div class="inf_box content_center" style="border: 1px solid black"><div class="error_box"><h1>컬러색이 존재하지 않습니다.</h1></div></div>';
    }
    ?>
<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-08
     * Time: 오후 2:02
     */
    if (strpos($_SERVER['PHP_SELF'],'color_scroll.php'))    #color_scroll에서 실행되고 있으면 이거 실행
    {
        echo '<div class="header_box" style="float: left; margin-left: 20px">';
        echo '<a class="header_link" href="main.php">Home</a>';
        echo '</div>';
        echo '<div class="header_box" style="float: right;">';
        echo '<a class="header_link" href="SignUp.php">Join</a>';
        echo '</div>';
        echo '<div class="header_box" style="float: right">';
        echo '<a class="header_link" href="Login.php">Log ina</a>';
        echo '</div>';
    }
    else
    {
        echo '<div class="header_box" style="float: left; margin-left: 20px">';
        echo '<a class="header_link" href="main.php">Home</a>';
        echo '</div>';
        echo '<div class="header_box" style="float: right;">';
        echo '<a class="header_link" href="SignUp.php">Join</a>';
        echo '</div>';
        echo '<div class="header_box" style="float: right">';
        echo '<a class="header_link" href="Login.php">Log in</a>';
        echo '</div>';
    }

    ?>
<html>
<body>
</body>
</html>

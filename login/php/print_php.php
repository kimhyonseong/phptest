<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-26
     * Time: 오후 4:59
     */

    function print_menu()
    {
        $i=0;
        $files = scandir('description');
        while($i<count($files)) {
            $title = htmlspecialchars($files[$i]);
            if ($title == '.' || $title=='..') {
                ++$i;
                continue;
            }
            ?>
            <li><a href="http://localhost/firststorm/login/index.php?F=<?= $title ?>"><?= $title ?></a></li>
            <?php
            ++$i;
        }  // i는 4
    }

    function print_description()
    {
        if(isset($_GET['F'])) {
            echo file_get_contents('description/' . $_GET['F']);
        }
        else {
            echo "Hello";
        }
    }

    ?>
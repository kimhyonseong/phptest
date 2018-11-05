<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-11-01
     * Time: 오전 11:09
     */
    $fh = fopen("testfile.txt",'w') or die("Failed to create file");
    echo "<pre>";
    $text = <<<_END
    Line 1
    Line 2
    Line 3
_END;

    fwrite($fh,$text) or die("Could not write to file");
    fclose($fh);
    echo "File 'testfile.text' written successfully\n";

    $fh1=fopen("testfile.txt",'r')or
    die("File does not exist or you lack permission to open it");

    $line = fgets($fh1);

    fclose($fh1);
    echo $line;

    $fh1=fopen("testfile.txt",'r')or
    die("File does not exist or you lack permission to open it");

    $text1 = fread($fh1,7);
    fclose($fh1);
    echo $text1."\n";

    copy('testfile.txt','testfile2.txt') or die("Could not copy file");
    echo "File successfully copied to 'testfile.txt'"
    ?>
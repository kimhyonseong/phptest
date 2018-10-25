<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-25
     * Time: 오후 6:09
     */
    echo "a: [".(20>9)."]<br>";
    echo "b: [".(5==6)."]<br>";     //false is NULL
    echo "c: [".(1==0)."]<br>";
    echo "d: [".(1==1)."]<br>";

    $myname="Brain";
    echo "a: " . 73 . "<br>";           //"."을 붙여서 못 씀
    echo "b: "."Hello"."<br>";
    echo "c: ".FALSE."<br>";
    echo "d: ".$myname."<br>";

    $a = "1000";    $b = "+1000";
    if($a != $b) echo "1 ";
    if($a == $b) echo "2 ";
    if($a !== $b) echo "3 ";        //자동형식 변환 방지
    if($a === $b) echo "4 ";

    $c=1; $d=0;
    echo ($c AND $d) ."<br>";       //함수가 직접 못들감
    echo ($c or $d) . "<br>";
    echo ($c XOR $d) . "<br>";
    echo !$c;

    $count = 0;
    while(++$count<=12)
        echo "$count time 12 is " . $count*12 . "<br>";

    $count1 = 0;
    for($count = 1; $count<=12; ++$count)
        echo "$count time 10 is " . $count*10 . "<br>";

    $fp = fopen("text.txt",'wb');
    for($j=0; $j<100; ++$j)
    {
        $written = fwrite($fp,"data ");
        if($written == FALSE) break;
    }
    fclose($fp);

    $j=11;
    while($j-- > -10)
    {
        if($j == 0) continue;
        echo "$j " . (10/$j) . "<br>";
    }
    ?>
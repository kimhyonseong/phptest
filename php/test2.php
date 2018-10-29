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

    echo strrev(" .dlrow olleH");  //문자 반전
    echo str_repeat("Hip ",2);  //문자 반복
    echo strtoupper("hooray!")."<br>";  //대문자 전환

    $lowered = strtolower("aNY # OF LETTERs and Punctuation you WANT");
    echo $lowered."<br>";  //소문자로 바꿈

    $ucfixed = ucfirst("any # of letters and punctuation you want");
    echo $ucfixed."<br>";  //맨앞에꺼만 대문자로 바꿈 -> 소문자로 바꾼걸 일로 넣어야됨

    print (5-8)." ".abs(5-8)."<br>";

    echo fix_names("WILLIAM","henry","gatES") . "<br>";
    function fix_names($n1,$n2,$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1. " " . $n2 . " " . $n3;
    }

    $names = fix_names1("WILLIAM","henry","gatES");
    echo $names[0] . " " . $names[1] . " " . $names[2] ." 배열로". "<br>";
    function fix_names1($n1,$n2,$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return array($n1,$n2,$n3);
    }

    $a1 = "WILLIAM"; $a2 = "henry"; $a3 = "gatES";
    echo $a1." ".$a2." ".$a3."<br>";
    fix_names2($a1,$a2,$a3);
    echo $a1." ".$a2." ".$a3." - 참조전달(사용하지 말것)"."<br>";
    function fix_names2(&$n1,&$n2,&$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }

    $b1 = "WILLIAM"; $b2 = "henry"; $b3 = "gatES";
    echo $b1." ".$b2." ".$b3."<br>";
    fix_names3();
    echo $b1." ".$b2." ".$b3." 글로벌로 바꿈"."<br>";
    function fix_names3()
    {
        global $b1; $b1 = ucfirst(strtolower($b1));
        global $b2; $b2 = ucfirst(strtolower($b2));
        global $b3; $b3 = ucfirst(strtolower($b3));
    }

    if(function_exists("array_combine")) //
    {
        echo "Function exists"."<br>";
    }
    else echo "Function does not exist - better write our own"."<br>";
    echo phpversion()."<br>";

    ?>
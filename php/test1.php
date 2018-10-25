<?php
/**
 * Created by PhpStorm.
 * User: KimHyonSeong
 * Date: 2018-10-11
 * Time: 오후 8:11
 */
define("ROOT_LOCATION","/usr/local/www");
$directory = ROOT_LOCATION;
echo $directory,"<br>";

$a = 10; $b = 20; $c="호랑이"; $d="나비";

$oxo=array(array("x",'o','x'),
            array('o','x','o'),
            array('x','o','x'));
echo $oxo[0][0]; echo "<br>";

echo "$a + $b = " , $a+$b , "<br>";  //double quotes
    echo $a.=$b ,"<br>";

    echo '$a + $b = '. '$a+$b'.'<br>'."<br>";  //single quotes
    echo "\nDate\tName\tPayment\rK"."<br>";  //\n \t \r

    $out= <<<_END
<br>Debugging is twice as hard as writing the code in the first place.
<br>Therefor, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug "it".
<br><br>
- Brian W. Kernighan<br><br>
_END;
//If no write <br>, Don't Line break
    echo $out;

    $number = 12345 * 67890;
    echo "number = $number ".substr($number,3,4)."<br>";

    $pi="3.14"; $radius=5;
    echo $pi * ($radius * $radius),"<br>";

    echo "This is Line ". __Line__ . " of file " . __File__."<br>";

    function longdate($text,$timestamp)
    {
        return $text . date("l F jS Y",$timestamp);
    }
    $temp = "The date is ";
    echo longdate($temp,time()),"<br>";

    function static_test()  //static use
    {
        static $count = 0;
        echo " ",$count." ";
        $count++;
    }
    static_test(); static_test(); echo "<br>";

?>
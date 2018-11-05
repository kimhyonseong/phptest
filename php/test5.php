<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-31
     * Time: 오후 3:22
     */
    printf("There are %d items in your basket<br>",3);
    printf("<span style='color: #%X%X%X'> Hello </span>",65,127,245); //red,green,blue
    printf("<span style='color: #417FF5'> Hello </span>");
    echo "<pre>";
    printf("The result is: $%.2f <br>",123.42 /12);
    printf("The result is: $%15f <br>",123.42 /12);
    printf("The result is: $%015f <br>",123.42 /12);
    printf("The result is: $%15.2f <br>",123.42 /12);
    printf("The result is: $%'#15.2f <br>",123.42 /12);

    $h='Rasmus';

    printf("[%s]\n",                $h);
    printf("[%12s]\n",              $h);
    printf("[%-12s]\n",             $h);
    printf("[%012s]\n",             $h);
    printf("[%'#12s]\n",            $h);

    $d = 'Rasmus Lerdorf';

    printf("[%12.8s]\n",            $d);
    printf("[%-12.12s]\n",          $d);
    printf("[%-'@12.10s]\n",        $d);

    $out = sprintf("The result is: $%.2f",123.42/12);
    echo $out."<br>";
    echo time()."\n"; echo mktime(0,0,0,1,1,2000)."<br>";
    echo date("l F jS, Y - g:ia\n",time()+8*60*60);

    ?>
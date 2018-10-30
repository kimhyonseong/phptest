<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-29
     * Time: 오후 9:31
     */
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    //print_r($paper);
    for($j=0; $j<4; ++$j)
    {
        echo "$j: $paper[$j]<br>";
    }
    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser Printer";
    $paper['photo'] = "Photographic Paper";

    echo $paper['laser'] . "<br>";

    $p1 = array("Copier","Inkjet","Laser","Photo");
    echo "p1 element: $p1[2]<br>";
    $p2 = array('copier'=>"Copier &Multipurpose",
                'inkjet'=>"Inkjet Printer",
                'laser'=>"Laser Printer",
                'photo'=>"Photographic Paper");
    echo "p2 element: " . $p2['inkjet'] . "<br>";

    $j=0;
    foreach ($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }

    foreach($paper as $item => $de)
    {
        echo "$item: $de<br>";
    } echo "<br>This Line ".__LINE__."<br><br>";
    while(list($item,$d) = each($paper))
    {
        echo "$item: $d<br>";
    }

    list($a,$b)=array('Alice','Bob');
    echo "a=$a b=$b<br>";

    $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"),

        'pen' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'maker' => "Makers"),

        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips") );

    echo "<pre>";
    foreach($products as $section => $item)
        foreach ($item as $key => $value)
            echo "$section:\t$key\t($value)<br>";
        echo "</pre>";

    echo count($products,0)."<br>";
    //rsort($products,SORT_NUMERIC);

    echo "<pre>";
    foreach($products as $section => $item)
        foreach ($item as $key => $value)
            echo "$section:\t$key\t($value)<br>";
    echo "</pre>";

    shuffle($products);

    echo "<pre>";
    foreach($products as $section => $item)
        foreach ($item as $key => $value)
            echo "$section:\t$key\t($value)<br>";
    echo "</pre>";

    $temp = explode(' ',"This is a sentence with seven words");
    print_r($temp); echo "<br>";
    //extract( , ,);
    $j = 23; $temp = "Hello"; $address = "1 Old Street"; $age = 61;
    print_r(compact(explode(' ',"j temp address age"))); echo "<br>";
    echo $j; reset($products); $item1=reset($products); //echo $item1;
    ?>

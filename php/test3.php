<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-29
     * Time: 오후 4:32
     */
    $object = new User;
    print_r($object); echo "<br>";

    $object -> name = "Joe";
    $object -> password = "ypass";
    print_r($object); echo "<br>";

    $object -> save_user();
    
    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }

    ?>
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
            echo "Save User code goes here"."<br>";
        }
    }

    $object1 = new User1();
    $object1 -> name = "Alice";
    $object2 = clone $object1;
    $object2 -> name = "Amy";

    echo "object1 name = " . $object1 -> name . "<br>";
    echo "object2 name = " . $object2 -> name . "<br>";

    class User1
    {
        public $name;
    }

    class User2  //생성자
    {
        public function User2($param1,$param2)
        {
            //??;;
            $username = "Guest";
        }
    }

    class User3
    {
        function __destruct()
        {
            //소멸자 코드...?
        }
    }

    class User4
    {
        public $name, $password;

        function get_password()
        {
            return $this -> password;
        }
    }
    $object4 = new User4();
    $object4 -> password = "secret";

    echo $object4 -> get_password()."<br>";

    class User5
    {
        static function pwd_string()
        {
            echo "Please enter your password"."<br>";
        }
    }
    User5::pwd_string();

    class Translate
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 3;

        static function lookup()
        {
            echo self::SPANISH;
        }
    }
    Translate::lookup(); echo "<br>";

    class Example
    {
        var $name = "Michel";
        public $age = 23;

        protected $usercount;

        private function admin()
        {

        }
    }
    class Test
    {
        static $static_property = "I'm static";

        function get_sp()
        {
            return self::$static_property;
        }
    }
    $temp = new Test();

    echo "Test A: " . Test::$static_property . "<br>";
    echo "Test B: " . $temp->get_sp() . "<br>";
    //echo "Test C: " . $temp->static_property . "<br`>"

    class User_
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }

    class Subscriber extends User_
    {
        public $phone , $email;

        function display()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Pass: " . $this->password . "<br>";
            echo "Phone: " . $this->phone . "<br>";
            echo "E-mail: " . $this->email . "<br>";
        }
    }

    $ob = new Subscriber();
    $ob->name = "Fred";
    $ob->password = "pword";
    $ob->phone = "012 3456 7890";
    $ob->email = "Fred@naver.com";
    $ob->display();

    class Dad
    {
        function test()
        {
            echo "[Class Dad] I am your Father<br>";
        }
    }
    class Son extends Dad
    {
        function test()
        {
            echo "[Class Son] I am Luke<br>";
        }
        function test2()
        {
            parent::test();
        }
    }
    $obj = new Son;
    $obj -> test();
    $obj -> test2();


    class Wildcat
    {
        public $fur;

        function __construct()
        {
            $this -> fur = "TRUE";
        }
    }
    class Triger extends Wildcat
    {
        public $stripes;

        function __construct()
        {
            parent::__construct();
            $this -> stripes = "TRUE";
        }
    }
    $ob1 =  new Triger();

    echo "Trigers have ...<br>";
    echo "Fur: " . $ob1->fur . "<br>";
    echo "Stripes: " . $ob1->stripes . "<br>";
    ?>
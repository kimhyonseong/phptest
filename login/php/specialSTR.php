<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-26
     * Time: 오후 5:37
     */

    function special_check($str)
    {
        $special = "/[~!@#$%^&*()_\-\+\=\\\'\"\<>,\.\|;:`\/]/";  //특수문자 패턴

        if(preg_match($special,$str))
        {
            $msg = "특수문자는 이용이 제한됩니디.";
            echo "<script>alert('$msg'); history.back(); </script>";
        }
    }

    function return_special($string)
    {
        $special = "/[~!@#$%^&*()_\-\+\=\\\'\"\<>,\.\|;:`\/]/";  //특수문자 패턴

        if(preg_match($special,$string))
        {
            return 1;
        }
        else return 0;
    }
?>
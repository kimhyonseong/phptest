<?php
/**
 * Created by PhpStorm.
 * User: 김현성
 * Date: 2019-07-30
 * Time: 오후 2:51
 */

class cipherClass{
    var $key;
    var $iv;

    function encrypt($data){
        // 암호화 할 키
        $this->key = hash('sha256','I_was_King!@');

        // initializing vector(초기화 벡터) 아직 어떻게 쓰는지는 모르겠으나
        // 16비트가 넘어가면 오류가 발생하여 해쉬를 0부터 16자리까지 자름
        $this->iv = substr(hash('sha256','77(4#M5j0!'),0,16);

        return openssl_encrypt($data,
                        "AES-256-CBC",
                                $this->key,
                        0, // true는 결과물 비트별로 분리 -> 깨질 수 있음
                                $this->iv);
    }

    function decrypt($data){
        // 암호화 할 키
        $this->key = hash('sha256','I_was_King!@');

        // initializing vector(초기화 벡터) 아직 어떻게 쓰는지는 모르겠으나
        // 16비트가 넘어가면 오류가 발생하여 해쉬를 0부터 16자리까지 자름
        $this->iv = substr(hash('sha256','77(4#M5j0!'),0,16);

        return openssl_decrypt($data,
            "AES-256-CBC",
            $this->key,
            0,
            $this->iv);
    }
}
?>
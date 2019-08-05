<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-30
 * Time: 오전 11:37
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/phptest/ClassRoom/glob.inc.php';

$ip = sprintf('%u',ip2long($_SERVER['REMOTE_ADDR']));
$url = addslashes($_SERVER['REQUEST_URI']);

$dbi = new dbClass();
$pw = new cipherClass();

//ip 암호화
$encrypted = $pw->encrypt($ip);

$dbi->dbOpen('A_test');

$sql = 'delete from visitor';
$sql .=' where date < date_add(now(),interval - 5 minute )';
$dbi->queryDB($sql);

//암호화된 ip 삽입
$sql = 'insert into visitor (ip,url) values ("'.$encrypted.'","'.$url.'")';
$sql .= ' on duplicate key update url = "'.$url.'"';  //ip가 프라이머리 키임
$dbi->queryDB($sql);

$sql = 'select count(ip) cnt from visitor';
$cnt_query = $dbi->queryDB($sql);
$cnt = $dbi->fetchDB($cnt_query);

echo $cnt['cnt'];
//echo $_SERVER['REMOTE_ADDR'].' '.$ip;
//echo hash('khs3326','안녕하세요');











function Encrypt($str, $secret_key='secret key', $secret_iv='secret iv')
{
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 32)    ;

    return str_replace("=", "", base64_encode(
            openssl_encrypt($str, "AES-256-CBC", $key, 0, $iv))
    );
}


function Decrypt($str, $secret_key='secret key', $secret_iv='secret iv')
{
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 32);

    return openssl_decrypt(
        base64_decode($str), "AES-256-CBC", $key, 0, $iv
    );
}


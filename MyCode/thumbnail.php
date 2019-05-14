<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-05-14
 * Time: 오전 9:24
 */
$original_path = '111.jpg';

$original_img = imagecreatefromjpeg($original_path);



$origin_size = getimagesize($original_path);  //사이즈 받아오기 및 새로운 사이즈 지정

$new_size = array(200,100);



$new_img = imagecreatetruecolor($new_size[0],$new_size[1]);  //복사될 이미지 틀 만들어주기

imagecopyresampled($new_img,$original_img,0,0,0,0,$new_size[0],$new_size[1],$origin_size[0],$origin_size[1]);  //new_img에 형식대로 복사



$save_path = '111_1.jpg';

imagejpeg($new_img,$save_path);  //new_img를 경로에 저장
?>
<html lang="kr">
<body>
<img src="111.jpg" alt="??" title="??">
<img src="111_1.jpg" alt="1?" title="1?">
</body>
</html>

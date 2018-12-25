<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-10-17
     * Time: 오후 2:06
     */

?>
<!Doctype html>
<html>
<head>
    <title>로그인</title>
</head>
<body>
<div style="text-align: center;">
    <h1>로그인</h1>
    <table border="0" style="text-align: center; margin: auto">
        <tr>
            <td><input type="text" name="ID" id="아이디" title="id_box" placeholder="ID" required="required"></td>
        </tr>
        <tr>
            <td><input type="text" name="PW" id="비밀번호" title="pw_box" placeholder="Password"></td>
        </tr>
    </table>
    <input type="submit" value="Log In" formaction="query.php"> <input type="submit" value="비밀번호 찾기">
</div>
</body>
</html>
</Doctype>
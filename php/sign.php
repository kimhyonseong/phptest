<doctype html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>회원가입</title>
    </head>
    <body>
<div style="text-align: center;">
    <h1>회원가입</h1>
    <p>start</p>
    <form name="join" method="POST" action="member.php">
    <table border="0" cellpadding="2" cellspacing="2" style="width: 350px; height: 100px; margin: auto; ">
        <tr>
            <td width="100px" align="center" valign="middle">ID</td>
            <td>
                <input type="text" size="20" name="아이디" title="id">
            </td>
            <td><input type="button" title="확인" id="중복확인1" value="중복확인"></td>
        </tr>

        <tr>
            <td width="100px" align="center" valign="middle">비밀번호</td>
            <td>
                <input type="text" size="20" name="비밀번호" title="PW">
            </td>
        </tr>
        <tr>
            <td width="100px" align="center" valign="middle">이름</td>
            <td>
                <input type="text" size="20" name="이름" title="name">
            </td>
        </tr>
        <tr>
            <td width="100px" align="center" valign="middle">E-mail</td>
            <td>
                <input type="text" size="20" name="이메일" title="email">
            </td>
        </tr>
        <tr>
            <td width="100px" align="center" valign="middle">전화번호</td>
            <td>
                <input type="text" size="20" name="전번" title="phone"">
            </td>
        </tr>
    </table>
    <input type="submit" value="제출"> <input type="reset" value="삭제">
</form>
</div>
    </body>
    </html>

<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-11-05
     * Time: 오후 3:25
     */
    ?>


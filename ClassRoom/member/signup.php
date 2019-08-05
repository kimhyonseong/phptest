<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 2019-07-31
 * Time: 오후 4:27
 */
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>가입</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        body{
            width: 400px;
            margin: auto;
        }
        .input {
            border: #B2B2B2 2px solid;
            border-radius: 3px;
            padding: 7px;
            padding-left: 14px;
            height: 20px;
            -webkit-transition: 1s;
            outline: none;
        }

        .input:focus {
            border: #00bf00 2px solid;
            border-radius: 3px;
            padding: 7px;
            padding-left: 14px;
            height: 20px;
            /*-webkit-transition: 2s;*/
        }
        input[type=submit]{
            border-radius: 5px;
            background-color: transparent;
            border: #A6B2BE 1px solid;
            margin-top: 10px;
        }
        .warning{
            color: red;
        }
        .safe {
            color: green;
        }

        .label{
            margin-bottom: 2px;
            font-size: 17px;
        }
    </style>
</head>
<body>
<form method="post" id="form" action="../DB/signup.php">

    <h3 class="label"><label for="id">아이디</label></h3>
    <input type="text" class="input" id="id" name="id"><br>
    <span class="warning" id="id_ch_msg" style="display: none"></span>

    <h3 class="label"><label for="pw">비밀번호</label></h3>
    <input type="password" class="input" id="pw" name="pw"><br>
    <span class="warning" id="pw_msg" style="display: none"></span>

    <h3 class="label"><label for="pw_ch">비밀번호 확인</label></h3>
    <input type="password" class="input" id="pw_ch" name="pw_ch"><br>
    <span class="warning" id="pw_ch_msg" style="display: none"></span>

    <h3 class="label"><label for="usr_nm">이름</label></h3>
    <input type="text" class="input" id="usr_nm" name="usr_nm"><br>
    <span class="warning" id="usr_nm_msg" style="display: none"></span>

    <h3 class="label"><label for="birth">생일</label></h3>
    <input class="input" type="date" id="birth" name="birth"><br>

    <h3 class="label"><label for="email">이메일</label></h3>
    <input type="text" class="input" id="email" name="email"><br>
    <span class="warning" id="email_msg" style="display: none"></span>
    <input type="submit" id="submit" value="가입"><br>
</form>
<script>
    $(function () {

        var id = $('#id');
        var idMsg = $('#id_ch_msg');
        let pw = $('#pw');
        let pwMsg = $('#pw_msg');
        let pwCh = $('#pw_ch');
        let pwChMsg = $('#pw_ch_msg');
        let usrNm = $('#usr_nm');
        let usrNmMsg = $('#usr_nm_msg');
        let birth = $('#birth');
        let form = $('#form');
        let email = $('#email');
        let emailMsg = $('#email_msg');
        let complete = 1;

        //아이디 중복체크
        function idCh() {
            $.ajax({
                url: '../DB/id_checking.php',
                data: {id: id.val()},
                type: 'post',

                success: function (data) {
                    if (!id.val()) {
                        idMsg.text('꼭 입력하셔야합니다.').css('display', 'block').attr('class','warning');
                        complete = 0;
                    } else if (data === '1') {
                        idMsg.text('사용가능한 아이디입니다!!').css('display', 'block').attr('class','safe');
                        complete = 1;
                    } else {
                        idMsg.text('사용중인 아이디입니다.ㅜㅜ').css('display', 'block').attr('class','warning');
                        complete = 0;
                    }
                }
            });
        }

        // 중복체크 버튼 없이 바로 바로하기
        id.change(function () {
            idCh();
        });

        // 아이디 중복 체크
        // $('#id_ch').click(function () {
        //
        //     if (!$('#id').val()) {
        //         alert('아이디를 입력해주세요');
        //         $('#id').focus();
        //     } else {
        //         $.ajax({
        //             url: '//khs.com/phptest/ClassRoom/DB/id_checking.php',
        //             data: {id: $('#id').val()},
        //             type: "POST",
        //
        //             success: function (data) {
        //                 if (data === '1') {
        //                     alert('사용 가능한 아이디입니다.');
        //                     $('#id_ch').attr('disabled',true).val('체크 완료');
        //                     $('#id_check_complete').val('true');
        //                     //$('#id').attr('readonly',true);
        //                 } else {
        //                     alert('중복된 아이디입니다.');
        //                 }
        //             }
        //         });
        //     }
        // });

        //중복체크 후 아이디 수정 시 버튼 및 값 변경
        // $('#id').keydown(function () {
        //     if ($('#id_check_complete').val() === 'true') {
        //
        //         var ask = confirm('아이디 체크 다시해야함');
        //
        //         if (ask === true) {
        //             $('#id_ch').attr('disabled',false).val('중복체크');
        //             $('#id_check_complete').val('false');
        //         } else {
        //             return false;
        //         }
        //     }
        // });

        pw.keyup(function () {
            if (pw.val()) {
                pwMsg.text('').css('display','none');
            } else {
                pwMsg.text('꼭 입력하셔야합니다.').css('display','block');
            }
        });

        pwCh.keyup(function () {
            if (pwCh.val()) {
                pwChMsg.text('').css('display','none');
            } else {
                pwChMsg.text('꼭 입력하셔야합니다.').css('display','block');
            }
        });
        pwCh.change(function () {
            if (pwCh.val() !== pw.val()) {
                pwCh.val('');
                pwChMsg.text('비밀번호와 일치하지 않습니다.').css('display','block');
            } else {
                pwChMsg.text('').css('display','none');
            }
        });

        usrNm.keyup(function () {
            if (usrNm.val()) {
                usrNmMsg.text('').css('display','none');
            } else {
                usrNmMsg.text('꼭 입력하셔야합니다.').css('display','block');
            }
        });

        email.keyup(function () {
            if (email.val()) {
                emailMsg.text('').css('display','none');
            } else {
                emailMsg.text('꼭 입력하셔야합니다.').css('display','block');
            }
        });

        //서밋 시 상황
       $('#submit').click(function () {

            if(!id.val()) {
                idMsg.text('꼭 입력하셔야합니다.').css('display','block').attr('class','warning');
                complete = 0;
            } else {
                idCh();
            }

            //비밀번호 확인과 비밀번호 위치 바꿔서 정상 동작하게함함
           if(pw.val() && pwCh.val() !== pw.val()) {
                pwChMsg.text('일치하지 않습니다.').css('display','block');
                complete = 0;
            } else {
                pwChMsg.text('').css('display','none');
            }

           //비밀번호 메시지
            if(!pw.val()) {
                pwMsg.text('입력하셔야합니다').css('display','block');
                pwChMsg.text('일치하지 않습니다.').css('display','block');
                complete = 0;
            } else {
                pwMsg.text('').css('display','none');
            }

            if(!usrNm.val()) {
                usrNmMsg.text('입력하셔야합니다').css('display','block');
                complete = 0;
            } else {
                usrNmMsg.text('').css('display','none');
            }

            if(!birth.val()) {
                complete = 0;
            }

            if(!email.val()) {
                emailMsg.text('입력하셔야합니다').css('display','block');
                complete = 0;
            }

            if (complete === 1) {
                form.submit.action = '../DB/signup.php';
                form.submit();
            } else {
                return false;
            }
        });
    });
</script>
</body>
</html>
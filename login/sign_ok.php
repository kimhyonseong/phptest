<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {text-align: center;}
    </style>
    <script>
        function go(page) {
            location.href=page;
        }
    </script>
</head>
<body>
<?php
    include_once 'php/DBconnect.php';
    include_once 'member/Signquery.php';
?>
<article>
    <h1>Welcome New User</h1>
    <p><input type="button" onclick="location.href='index.php'"></p>
</article>
</body>
</html>
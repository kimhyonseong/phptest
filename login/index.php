<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
        body {text-align: center;}
        #menu {text-align: right;}
        #menu li{display: inline-block; border-left: black solid 1px; padding:0 10px;}
        #menu li:last-child{border-right: black 1px solid;}
        body article table {width: 350px; height: 100px; margin: auto;}
    </style>
    <script>
        function check() {
            var ud = document.getElementById("id").value;
            if(ud){
                window.open("check.php?id="+ud,"","width=300,height=100");
            }
            else alert("아이디를 입력하세요");
        }
    </script>
</head>
<body>
<header>
    <h1><a href="index.php">HS site</a></h1>
</header>
<nav>
    <ul id="menu">
        <?php
            include 'php/print_php.php';
            print_menu();
        ?>
    </ul>
</nav>
<article>
    <?php
        print_description();
    ?>
</article>
</body>
</html>
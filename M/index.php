<?php
    require ("config/config.php");
    require ("lib/db.php");
    $conn=db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
    $result=mysqli_query($conn,'select * from topic');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/firststorm/M/style.css?ver=3">
    <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css"  crossorigin="anonymous">

</head>
<body id="target">
<header>
    <h1><a href="http://localhost/firststorm/M/index.php">Javascript</a></h1>
</header>
    <nav>
        <ol>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                }
            ?>
        </ol>
    </nav>
<div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
</div>
<article>
    <?php
        if(empty($_GET['id'])==0) {
            $sql = "select * from topic where  id=" . $_GET['id'];
            $result1 = mysqli_query($conn, $sql);
            $row1 = mysqli_fetch_assoc($result1);
            echo '<h2>' . $row1['title'] . '</h2>';
            echo $row1['description'];
        }
    ?>
</article>

<script src="bootstrap-3.3.4-dist/js/npm.js" crossorigin="anonymous"></script>
<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>
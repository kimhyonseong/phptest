<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-11-06
     * Time: 오후 10:24
     */

    if(isset($_POST['name'])) $name = $_POST['name'];
    else $name = "(Not entered)";
    echo <<<_END
    <html>
        <head>
            <title>Form Test</title>
        </head>
    <body>
    Your name is : $name <br>
    <form method="post" action="formtest.php">
    What is your name? <input type="text" name="name">
    <input type="submit">
    <pre>
        Loan Amount <input type="text" name="principle" value="25">
</pre>
    </form>
    </body>
</html>
_END;

    ?>
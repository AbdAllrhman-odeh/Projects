<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            if(isset($_REQUEST['Result']))
            {
                $result=$_REQUEST['Result'];
                echo $result;
                //echo("eroor 1010<br>");
            }
        }
    ?>
    <h1>
        Lec 13+14+15+16
    </h1>
    <form method="post" target="_blank" action="formValdation.php">
        <label for="userName">
            Enter your userName:
        </label>
        <input type="text" id="userName" name="userName">
        <br>
        <br>
        <label for="passWord">
            Enter your password:
        </label>
        <input type="password" id="passWord" name="password">
        <br>
        <br>
        <input type="submit" value="signIn">
    </form>
</body>
</html>
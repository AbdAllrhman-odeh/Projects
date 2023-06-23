<?php
    //echo("welcome<br>");
    $userName=$_POST["userName"];
    $password=$_POST["password"];

    $flag="0";
    if(empty($userName))
    {
        $flag="<mark>user Name is empty</mark><br>";
    }
    else if(empty($password))
    {
        $flag="<mark>password is empty</mark><br>";
    }

    if($flag!="0")
    {
        header('Location:form.php?Result='.$flag);
        exit;
    }
    echo("welcome $userName<br>");
    function test_input($var)
    {
        $var=htmlspecialchars($var);
        $var=trim($var);
        $var=stripslashes($var);
        return $var;
    }

    $userName=test_input($userName);
    $password=test_input($password);

    //check if the userName and the password is correct
    $AuserName="admin";
    $Apassword="admin123";
    if($userName==$AuserName)
    {
        if($Apassword==$password)
        {
            // correct userName and password
            // echo("your username and password are correct!<br>");
            header('Location:homePage.php?var=welcoem to the home page ('.$userName.')');
            exit;
        }
        else
        {
            //paswrod is not correct
            $flag="<mark>your password is not correct<br></mark>";
        }
    }
    else
    {
        //username is NOT correct
        $flag="<mark>your user Name is not correct<br></mark>";
    }
    
    if($flag!="0")
    {
        //eathir userName or passWord is empty
        header('Location:form.php?Result='.$flag);
        exit;
    }
    
    
?>
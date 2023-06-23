<?php
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            if(isset($_REQUEST['var']))
            {
                $result=$_REQUEST['var'];
                echo $result;
            }
        }
        echo("<br>");
       

    ?>
<?php
    $num1 = $_REQUEST['number'];

    for($x = 0; $x <= ($num1); $x++)
    {
        if($num1 % $x == 0)
        {
            print($x);
            print("<br/>");
        }
    }
?>
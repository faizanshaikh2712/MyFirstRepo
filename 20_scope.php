<?php
        echo "Global/Local Scope in PHP <br>";

        $a = 98; //Global variable
        $b = 75;

        function printvalue()
        {
            $a = 95; //Local Variable

            //to access global variable outside function
            global $a, $b;
            echo "The value of a and b is $a and $b ";
        }
        printvalue();
?>
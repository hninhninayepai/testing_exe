<?php
    echo "<pre>";

    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    function listvalues($value)
    {
        echo "$value, ";
    }

    function printAverage($array)
    {
        $total = 0;
        foreach($array as $element)
        {
            $total += $element;
        }
        echo number_format($total / count($array), 1);
    }

    echo "Recorded temperatures : ";
    array_walk($temperatures, "listvalues");
    echo "<br>";

    echo "Average Temperature is : ";
    printAverage($temperatures);
    echo "<br>";

    //sort the temperatures in ascending order for both of the following lists.
    sort($temperatures);

    //print the first 5 values
    echo "List of five lowest temperatures : ";
    for($i = 0; $i < 5; $i++)
    {
        echo "$temperatures[$i], ";
    }
    echo "<br>"; 

    //print the last 5 values
    echo "List of five highest temperatures : ";       
    for($i = count($temperatures) - 5; $i <= count($temperatures) - 1; $i++)
    {
        echo "$temperatures[$i], ";
    }
    echo "<br>";

    echo "</pre>";
?>
<?php 
    $data = rand(1, 100);
    echo $data . "<br>";
    if($data < 20){
        echo "Less than 20";
    }
    else if($data < 40){
        echo "Less than 40";
    }
    else if($data < 60){
        echo "Less than 60";
    }
    else if($data < 80){
        echo "Less than 80";
    }
    else{
        echo "Greater than 80";
    }

    echo "<br>";
    $data1 = 10;
    $data2 = "10.0";
    var_dump($data1);
    var_dump($data2);
    if($data1 === $data2){
        echo "Equal";
        
    }
    else{
        echo "Not Equal";
    }


?>
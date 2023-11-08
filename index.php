


<?php 
    date_default_timezone_set('Asia/Dhaka');
    $title = date("H:i:s");
?>


<html>
    <head>
        <title><?php print($title); ?></title>
    </head>

    <body>
        <?php 

            $data = array(
                "name" => "John",
                "age" => 25,
                "city" => "New York"
            );

            $jsonData = json_encode($data);

            print($jsonData);

            print("<br>");

            $rawData = json_decode($jsonData);
            foreach($rawData as $key => $value){
                print($key . " : " . $value . "<br>");
            }

        ?>
        
    </body>
</html>


<?php
    
    $title = "Loops in PHP"
?>
<html>

    <head>

        <title>
            <?php 
                echo $title;
            ?>
        </title>
        <link rel ="stylesheet" href = "csses/loop_style.css">
        
    </head>
    <body>
        <div class ="color_box"> <?php 
            for( $i=0;$i<16;$i++){
                $color = "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
                 echo "<div class = 'outer'> <div class = 'box'style = 'background-color:$color'> <div class ='item' >$i</div> </div></div>";
            }
        ?></div>
        <br>
        <div class="outer_board">
        <div class="chess_board" >
            <?php
                $boardSize=8;
                for($i=1;$i<=$boardSize;$i++){
                    for($j=1;$j<=$boardSize;$j++){
                        if($i%2==$j%2){
                           echo  "<div class='white_block'></div>";
                        }
                        else{
                            echo "<div class='black_block'></div>";
                        }

                        
                    }
                    echo "<br>";
                }
            ?>
        </div>
            </div>
        
    </body>
</html>
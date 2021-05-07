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
        $mass = [1,2,3,4,5,6,7,8,9,10];
        
        function multiply($multiplier){ ?>
            <div class="multiplier-wrapper">
            <?php
                foreach ($multiplier as $value) { ?>
                    <div class="multiplier-item">
                    <?php
                        for ($i = 1; $i <= count($multiplier); $i++){

                            $result = $value * $i;

                            $value2 = $value; 

                            $i_2 = $i;

                            $value2 = str_split($value2);
                            foreach ($value2 as $value_result2) {
                                if($value_result2 == 1){
                                    $color2 = 'red';
                                }elseif($value_result2 == 2){
                                    $color2 = 'green';
                                }elseif($value_result2 == 3){
                                    $color2 = 'yellow';
                                }elseif($value_result2 == 4){
                                    $color2 = 'blue';
                                }else{
                                    $color2 = '';
                                }
                                echo "<span class='$color2'>$value_result2</span>";
                            }

                            echo " x ";

                            $i_2 = str_split($i_2);
                            foreach ($i_2 as $i_2_result) {
                                if($i_2_result == 1){
                                    $color = 'red';
                                }elseif($i_2_result == 2){
                                    $color = 'green';
                                }elseif($i_2_result == 3){
                                    $color = 'yellow';
                                }elseif($i_2_result == 4){
                                    $color = 'blue';
                                }else{
                                    $color = '';
                                }
                                echo "<span class='$color'>$i_2_result</span>";
                            }

                            echo " = ";

                            $result = str_split($result);
                            foreach ($result as $value_result) {
                                if($value_result == 1){
                                    $color3 = 'red';
                                }elseif($value_result== 2){
                                    $color3 = 'green';
                                }elseif($value_result == 3){
                                    $color3 = 'yellow';
                                }elseif($value_result == 4){
                                    $color3 = 'blue';
                                }else{
                                    $color3 = '';
                                }
                                echo  "<span class='$color3'>$value_result</span>";
                                
                            }

                            echo "<br>";
                            
                        }
                    ?>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
            multiply($mass);
        ?>

    <style>
        .multiplier-wrapper{
            display: grid;
            grid-template-columns: repeat(5, 140px);;
        }
        .multiplier-item{
            margin: 2px;
            border:  1px solid #000;
            padding: 10px;
        }
        .red{
            color: red;
        }
        .green{
            color: green;
        }
        .yellow{
            color: yellow;
        }
        .blue{
            color: blue;
        }
    </style>


</body>
</html>
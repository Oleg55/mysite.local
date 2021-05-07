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
                            echo "$value  x  $i = $result <br>";
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
    </style>


</body>
</html>
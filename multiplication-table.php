<?php include 'head.php'; ?>
    
<?php include 'header.php'; ?>

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


<?php include 'footer.php'; ?>
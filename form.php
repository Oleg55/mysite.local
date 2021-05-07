<?php include 'head.php'; ?>

<?php include 'header.php'; ?>

    <form  method="POST">
        <input type="text" name="str">
        <input type="submit" value="Отправить">
    </form>

    <?php 

        if(isset($_POST["str"])){

            $str = $_POST["str"];
        }

        function mb_strrev($str){
            $r = '';
            for ($i = mb_strlen($str); $i >= 0; $i--) {
                $r .= mb_substr($str, $i, 1);
            }
            return $r;
        }
        
        echo mb_strrev($str);

    ?>

<?php include 'footer.php'; ?>
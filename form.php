<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
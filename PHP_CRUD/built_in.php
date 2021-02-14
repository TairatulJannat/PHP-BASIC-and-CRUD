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
     echo rand(1,100).'<br>';
    $string="Hola!How are you?";
    $valuelength= strlen($string);
    echo $valuelength.'<br>';
    $values = ['Taira',12133,'tamima',4567,$string];
    $found = in_array($string,$values);
    if($found){
        echo "we did it";
    }else{
        echo "we messedup";
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function
    </title>
</head>
<body>
    <?php
     function calculation(){
         $num1 = 10;
         $num2 =20;
         $sum = $num1 + $num2;
         return $sum;
     }
     $total = calculation();
     echo $total.'<br>';

     function say_hola($hello){
         echo $hello;
     }
     say_hola('hey! is that spanish');
    ?>
</body>
</html>
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
    function value( $a , $b){
       $sum=$a+$b;
        return $sum;
    }
     $total= value(10,12);
     $total =value(100,$total);
     echo $total;
   ?> 
</body>
</html>
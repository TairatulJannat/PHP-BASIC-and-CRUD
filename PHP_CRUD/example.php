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
    if(1<3)
    {
        echo "I love php <br>";
    }elseif(20<10){
       echo "bla bla bal"; 
    }
    else{
        echo "saaaaaaaa";
    }
  for($i=0;$i<=10;$i++)
  {
      echo $i .'<br>';  
  }
  $value=6;
 switch($value)
  {
      case 10:
        echo "this is eat man";
        break;
        case 6:
            echo "this is eat woman";
            break;
            case 7:
                echo "this is eat child";
                break;
  }
  

    ?>
</body>
</html>
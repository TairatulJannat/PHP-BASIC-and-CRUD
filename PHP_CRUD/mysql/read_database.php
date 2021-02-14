<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<div class="container">
     <div class="col-sm-6">
    <?php 
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    $query = "SELECT * FROM user";
    $result =mysqli_query($connection , $query);
    $resutl_check= mysqli_num_rows($result);
    ?>
    <table style="margin: 0 auto;">
    <?php
    for($i=1;$i<=$resutl_check;$i++)
    {
        $row=mysqli_fetch_assoc($result); 
    ?>
    <div class="column">
      <br style= height:2px>
      <br> <?php echo "Id:".$row['id'].'<br>';?>
      <br> <?php echo "Username:".$row['username'].'<br>';?>
      <br> <?php  echo "Password:".$row['PASS'].'<br>';?>
   <br> <?php  echo "<a href=\"update_database.php?id={$row['id']}&username={$row['username']}&password={$row['PASS']}\">update</a><br><br>"; 
   ?>
    <br> <?php  echo "<a href=\"delete.php?id={$row['id']}\">DELETE</a><br><br>"; 
   ?>
    </div>
    <?php 
    }
    ?>
    </table>
     </div>
     </div>
     
     
</body>
</html>
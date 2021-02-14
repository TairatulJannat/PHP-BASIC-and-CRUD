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
       <form action="login.php" method="post">
        <div class="form-group">
        <label for="username">username</label>
         <input type="text"name="username" class="form-control">
        </div>
        <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
       
       </form>
       </div>
    </div>
    <?php 
    if(isset($_POST['submit']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];

       $connection = mysqli_connect('localhost','root','','loginapp');

        if($connection){
            echo "we are connected";
        }else{
            die("Database cannot connect");
        }
        $hash_password= password_hash($password,PASSWORD_DEFAULT);
      $query = "INSERT INTO user(username,pass) ";
      $query .= "VALUES('$username','$hash_password')";
     $result= mysqli_query($connection,$query);
      mysqli_stmt_execute($result);
      header("location: login.php?signup=success");
      exit();        
    

        // if($username && $password)
        // {
        //     echo $username.'<br>';
        // echo $password;
        // }else{
        //     echo "this field cannot be blank";
        // }
    }
    
    ?>

</body>
</html>
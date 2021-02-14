
<?php include 'db.php';?>

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
       <form action="update_database.php" method="post">
        <div class="form-group">
        <label for="username">username</label>
         <input type="text"name="username" value="<?php echo $_GET['username']; ?>" class="form-control">
        </div>
        <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" value="<?php echo $_GET['password']; ?>" class="form-control">
        <input type="number" name="id" value="<?php echo $_GET['id']; ?>" class="form-control">
        </div>
         <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
       
       </form>
       </div>
    </div>
    
    <!-- php include 'function.php' -->
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET ";
       $query .= "username = '$username', ";
       $query .= "PASS = '$password' ";
       $query .= "WHERE id = $id ";
       $result = mysqli_query($connection , $query);
       if($result)
       {
           header("location:read_database.php");
       }else{
           echo"Not updates";
       }
    }
    ?>
     
</body>
</html>
<?php include 'db.php';
$user_id= $_GET['id'];
$query = "DELETE from user WHERE id = '$user_id'";
$result = mysqli_query($connection , $query);
if($result)
{
    header("location:read_database.php");
}












?>

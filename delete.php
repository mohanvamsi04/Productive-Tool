<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Meet Deleted Successfully!";
    header("Location:inde.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Meet does not exist";
}
?>
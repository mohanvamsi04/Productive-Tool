<?php
include('connect.php');
if (isset($_POST["create"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $agenda = mysqli_real_escape_string($conn, $_POST["agenda"]);
    $host = mysqli_real_escape_string($conn, $_POST["host"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $duration = mysqli_real_escape_string($conn, $_POST["duration"]);
    $emails = mysqli_real_escape_string($conn, $_POST["emails"]);
    $discussion = mysqli_real_escape_string($conn, $_POST["discussion"]);
    $risks = mysqli_real_escape_string($conn, $_POST["risks"]);
    $actions = mysqli_real_escape_string($conn, $_POST["actions"]);
    $sqlInsert = "INSERT INTO books(agenda , host, date, time, duration,emails, discussion,risks,actions) VALUES ('$agenda','$host','$date', '$time','$duration','$emails','$discussion','$risks','$actions')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Meet Added Successfully!";
        header("Location:inde.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $agenda = mysqli_real_escape_string($conn, $_POST["agenda"]);
    $host = mysqli_real_escape_string($conn, $_POST["host"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $duration = mysqli_real_escape_string($conn, $_POST["duration"]);
    $emails = mysqli_real_escape_string($conn, $_POST["emails"]);
    $discussion = mysqli_real_escape_string($conn, $_POST["discussion"]);
    $risks = mysqli_real_escape_string($conn, $_POST["risks"]);
    $actions = mysqli_real_escape_string($conn, $_POST["actions"]);
    $sqlUpdate = "UPDATE books SET agenda = '$agenda', host = '$host', date = '$date',time = '$time',duration = '$duration',emails = '$emails', discussion = '$discussion',risks = '$risks',actions = '$actions' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Meeting Updated Successfully!";
        header("Location:inde.php");
    }else{
        die("Something went wrong");
    }
}

?>
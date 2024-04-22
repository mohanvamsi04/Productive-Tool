<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        button{
            display: block;
            border-radius: 1rem;
            background-color: aqua;
        }
        a{
            text-decoration: none;
            font-size: 1rem;
            background-color: aqua;
        }
    </style>
</head>
<body>

<?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $to = $_POST['tomail'];
        $currentstatus = $_POST['currentstatus'];
        $nextstep = $_POST['nextstep'];
        $risks = $_POST['risks'];
        $subject = "Weekly Report";

        $message = "<html><body>";
        $message = "<h1 style='font-weight: bold;color:#5DEBD7;'>Weekly Report</h1> <br>";
        $message.= "<h2>Current Status : </h2><p>$currentstatus</p>";
        $message.= "<h2>Next Step : </h2><p>$nextstep</p>";
        $message.= "<h2>Risks : </h2><p>$risks</p>";
        $message.="</body></html>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: mohanvamsi405@gmail.com';


        if (mail($to, $subject, $message, $headers)) {
            ?>
           <h1> <?php  echo "Email sent successfully";?>  </h1>
           
           <button><a href="tasks.php">Back To Tasks</a></button>
           <?php
        } else {
            ?>
           <h1> <?php echo "Failed to send email";?></h1>
           <?php
        }
     }
?>

    
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Meet Details</title>
    <style>
        body{
            font-family: 'Poppins',sans-serif;
        }
        .meet-details {
            background-color: #f5f5f5;
        }

        h3 {
            font-weight: 600;
            width: 25%;
        }

        p {
            font-size: 1rem;
            padding: 1rem;
            background-color: #cbf1f5;
            font-size: 1.5rem;
            border-radius: 1rem;
            margin-left: 2rem;
            word-wrap: break-word;
            white-space: pre-line;


        }

        p::after {
            content: '\A';
            white-space: pre;
        }



        body {
            background-color: lightskyblue;
        }

        .cont {
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Meeting Details</h1>
            <div>
                <a href="inde.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="meet-details p-5 my-4 cont">
            <?php
            include("connect.php");
            $id = $_GET['id'];
           
            if ($id) {
                $sql = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $agenda = $row["agenda"];
                    $host = $row["host"];
                    $date = $row["date"];
                    $time= $row["time"];
                    $duration = $row["duration"];
                    $emails=$row["emails"];
                    $discussion=$row["discussion"];
                    $risks=$row["risks"];
                    $actions=$row["actions"];
                    $message = "<html><body>";
                    $message = "<h1 style='font-weight: bold;color:#5DEBD7;'>Minutes of Meeting</h1> <br> <h2 style='display:inline;'>Agenda : </h2> $agenda <br>";
                    $message.= "<h2 style='display:inline;margin-right:2px;'>Host  : </h2>$host<br>";
                    $message.= "<h2 style='display:inline;margin-right:2px;'>Date  : </h2>$date<br>";
                    $message.= "<h2 style='display:inline;margin-right:2px;'>Time  : </h2> $time<br>";
                    $message.= "<h2 style='display:inline;margin-right:2px;'>Duration of Meet : </h2> $duration<br>";
                    $message.= "<h2>Discussion points : </h2><p>$discussion</p>";
                    $message.= "<h2>Risks : </h2><p>$risks</p>";
                    $message.= "<h2>Actions : </h2><p>$actions</p>";
                    $message.="</body></html>";

                    

                    $to = $emails;
                    $subject = $agenda;
                    $body = $message;
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: mohanvamsi405@gmail.com';
                    
                    // Send email
                    if (mail($to, $subject, $body, $headers)) {
                        echo "Email sent successfully\n";
                    } else {
                        echo "Failed to send email\n";
                    }
                    
            ?>

                    <div class="box">
                        <h3>Agenda :</h3>
                        <p><?php echo $row["agenda"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Host :</h3>
                        <p><?php echo $row["host"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Date of Meeting :</h3>
                        <p><?php echo $row["date"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>time :</h3>
                        <p><?php echo $row["time"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Duration :</h3>
                        <p><?php echo $row["duration"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Attendess :</h3>
                        <p><?php echo $row["emails"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Discussion Points :</h3>
                        <p><?php echo $row["discussion"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Risks :</h3>
                        <p><?php echo $row["risks"]; ?></p>
                    </div>
                    <div class="box">
                        <h3>Actions :</h3>
                        <p><?php echo $row["actions"]; ?></p>
                    </div>

            <?php
                }
            } else {
                echo "<h3>No books found</h3>";
            }
            ?>

        </div>
    </div>
</body>

</html>
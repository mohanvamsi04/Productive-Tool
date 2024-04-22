<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Meet</title>
    <style>
        body{
            background-color: #d0f8e5;
            font-family: 'Poppins',sans-serif;
        }
        h1{
            color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Meet</h1>
            <div>
            <a href="inde.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="agenda" placeholder="Agenda" value="<?php echo $row["agenda"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="host" placeholder="host Name:" value="<?php echo $row["host"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="date" class="form-control" name="date" placeholder="date of meeting" value="<?php echo $row["date"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="time" class="form-control" name="time" placeholder="time" value="<?php echo $row["time"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="duration" placeholder="Duration" value="<?php echo $row["duration"]; ?>">
            </div>
            <div class="form-elemnt my-4">
            <textarea id="emails" name="emails" class="form-control" rows="4" cols="50" placeholder="Attendees"><?php echo $row["emails"]; ?></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="discussion" id="" class="form-control" placeholder="discussion Points" cols="30" rows="10"><?php echo $row["discussion"]; ?></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="risks" id="" class="form-control" placeholder="Risks and Challenges" cols="30" rows="10"><?php echo $row["risks"]; ?></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="actions" id="" class="form-control" placeholder="Actions" cols="30" rows="10"><?php echo $row["actions"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Meet" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Meet Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>
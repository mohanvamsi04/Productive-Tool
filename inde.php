<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Meet List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
        body{
            background-color: #d0f8e5;
            font-family: 'Poppins',sans-serif;
        }
        .tbs{
            border: 1px solid darkgreen;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Meetings List</h1>
            <div class="d-flex my-2 justify-content-between">
            <div>
                <a href="create.php" class="btn btn-primary">Add Meeting</a>
            </div>
            <div>
                <span style="visibility: hidden;"> gffgfg</span>
            </div>
            <div >
                <a href="tasks.php" class="btn btn-primary">Back</a>
            </div>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered tbs">
        <thead>
            <tr >
                <!-- <th>#</th> -->
                <th style="text-align: center; font-size:1.5rem;">Agenda</th>
                <th style="text-align: center; font-size:1.5rem;">Host</th>
                <th style="font-size:1.5rem;">Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM books";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <!-- <td><?php echo $data['id']; ?></td> -->
                <td style="text-align: center; font-size:1.25rem;"><?php echo $data['agenda']; ?></td>
                <td style="text-align: center; font-size:1.25rem;"><?php echo $data['host']; ?></td>
                
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read and Send</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>
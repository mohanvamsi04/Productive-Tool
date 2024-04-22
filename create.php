<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Book</title>
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
            <h1>Add Meeting</h1>
            <div>
            <a href="inde.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="agenda" placeholder="Agenda">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="host" placeholder="host Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="date" class="form-control" name="date" placeholder="Date of meeting">
            </div>
            <div class="form-elemnt my-4">
                <input type="time" class="form-control" name="time" placeholder="time">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="duration" placeholder="Duration">
            </div>
            <div class="form-elemnt my-4">
            <textarea id="emails" name="emails" class="form-control" rows="4" cols="50" placeholder="Attendees"></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="discussion" id="" class="form-control" placeholder="discussion Points" cols="30" rows="10"></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="risks" id="" class="form-control" placeholder="Risks and Challenges" cols="30" rows="10"></textarea>
            </div>
            <div class="form-element my-4">
                <textarea name="actions" id="" class="form-control" placeholder="Actions" cols="30" rows="10"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Meet" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>
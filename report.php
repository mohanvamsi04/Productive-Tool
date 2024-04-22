<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Weekly Report</title>
    <style>
        *{
            margin: 0;
            font-family: 'Poppins',sans-serif;
            
        }
        h1{
            text-align: center;
            background-color: aqua;
        }
        h2{
            padding: 1rem;
        }
        textarea{
            outline: none;
            border-radius: 1rem;
            width: 95%;
            border: none;
            background-color: #d1f9e5;
            padding: 1rem;
            font-size: 1rem;
            margin-left: 1rem;
        }
        input[type="text"]{
            outline: none;
            border-radius: 1rem;
            width: 95%;
            border: none;
            background-color: #d1f9e5;
            padding: 1rem;
            font-size: 1rem;
            margin-left: 1rem;
        }
        input[type="submit"]{
            margin-left: 46rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
            padding: 1rem;
            padding-left: 2rem;
            padding-right: 2rem;
            border-radius: 1rem;
            background-color: skyblue;
            cursor: -webkit-grab; cursor: grab;
            outline: none;
            border: none;
            font-size: 1rem;
        }
    </style>
</head>
<body>

<h1>Weekly Report</h1>
<form action="weeklymail.php" method="post">
    <h2>Mail To :</h2>
    <input type="text" name='tomail' placeholder="Email(s) of receiver">
    <h2>Current Status :</h2>
    <textarea name="currentstatus" id="cs" cols="30" rows="10"></textarea>
    <h2>Next Steps :</h2>
    <textarea name="nextstep" id="ns" cols="30" rows="10"></textarea>
    <h2>Risks :</h2>
    <textarea name="risks" id="rs" cols="30" rows="10"></textarea>
    <input type="submit" value="Send Mail">
</form>
    
</body>
</html>
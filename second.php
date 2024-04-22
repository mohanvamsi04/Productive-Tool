<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturing</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
          * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }

      body {
          /* background: linear-gradient(#CAF7E3,#EDFFEC); */
          background-color: #000000;
        
      }

      .navbar {
        /* background: linear-gradient(#97e7e1, #41c9e2); */
        background-color: #130f40;
background-image: linear-gradient(315deg, #130f40 0%, #000000 74%);
        color: #fff;
        position: sticky;
        top: 0;
      }

      .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }

      .logo {
        font-size: 1.5rem;
        height: auto;
        width: auto;
      }

      .nav-links {
        list-style: none;
        display: flex;
      }

      .nav-links li {
        margin-right: 15px;
      }

      .nav-links li a {
        text-decoration: none;
        color: #fff;
      }

      .nav-links li a:hover {
        text-decoration: underline;
      }
      .pro {
        font-weight: 600;
        margin-left: 10rem;
      }
      .flex-container2{
        margin: 2rem 25rem;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        
        
      }

      .items2{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 15rem;
        width: 20rem;
        border: 1px solid;
        color: white;
       
       background-color: #4d4855;
background-image: linear-gradient(147deg, #4d4855 0%, #000000 74%);
        margin: 1rem 0;
        font-size: 1.25rem;
        border: none;
        outline: none;
        border-radius: 1rem;
      }

      .items2:hover{
        background-image: none;
        background-color: #2d2a32;
        font-size: 1.5rem;
      }
     
      footer{
        position: relative;
        bottom: 0;
        display: flex;
        justify-content: center;
        padding: 1rem;
        /* background-color: #007f73; */
        background-color: #1e2222;
        margin-top: 1rem;
        color: white;

      }

      /* .i12{
        background: linear-gradient(#3F72AF,#71C9CE);
      }
      .i22{
        background: linear-gradient(#71C9CE,#A6E3E9);
      }
      .i32{
        background: linear-gradient(#FFE2E2,#FFC7C7);
      }
      .i42{
        background: linear-gradient(#AA96DA,#AA96DA);
      } */
      a{
        display: inline-block;
        text-decoration: none;
        outline: none;
        border: none;
        color: black;
      }
    </style>
</head>
<body>
    <!-- header section -->
    <nav class="navbar">
        <div class="container">
          <div class="logo"><img src="lifecycle.png" alt="" /></div>
          <p class="pro">PRODUCTIVE TOOL</p>
          <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </div>
      </nav>

      <!-- main content -->

      <div class="flex-container2">
        <div class="items2 i12">Aerospace and Defense</div>
        <div class="items2 i22">Automotive</div>
        <a href="third.php"><div class="items2 i32">Industrial Manufacturing</div></a>
        <div class="items2 i42">Chemical and process</div>
      </div>
    
      <!-- footer section -->
      <footer>
        <p>Copyright&copy;Mohan Vamsi Bannela. All rights reserved.</p>
      </footer>
</body>
</html>
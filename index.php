<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      /* Reset some default styles */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        /* background: linear-gradient(#caf7e3, #edffec); */
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
        font-size: 1rem;
        font-weight: 600;
        margin-left: 10rem;
      }

      .flex-container1 {
        display: flex;
        /* background-color: aqua; */
        margin: 2rem;
        flex-wrap: wrap;
        justify-content: center;
        padding: 1rem;
      }
      .items1 {
        border: 1px solid grey;
        height: 15rem;
        width: 17rem;
        display: flex;
        margin: 1rem;
        justify-content: center;
        align-items: center;
        font-size: 1.25rem;
       /* background-color: #000000; */
       color: white;
       
       background-color: #4d4855;
background-image: linear-gradient(147deg, #4d4855 0%, #000000 74%);

        /* font-family: sans-serif; */
        border-radius: 1rem;
        outline: none;
      }
      .items1:hover{
        background-image: none;
        background-color: #2d2a32;
        font-size: 1.5rem;
      }
      /* .i11 {
        background: linear-gradient(45deg, #007f73, #4ccd99);
      }
      .i21 {
        background: linear-gradient(45deg, #41c9e2, #008dda);
      }
      .i31 {
        background: linear-gradient(#41c9e2, #ace2e1);
      }
      .i41 {
        background: linear-gradient(#bc7fcd, #86469c);
      }
      .i51 {
        background: linear-gradient(#76abae, #eeeeee);
      }
      .i61 {
        background: linear-gradient(#d1bb9e, #ead8c0);
      } */
      .mcontainer {
        display: flex;
        justify-content: center;
        /* border: 1px solid black; */
        margin: 0rem 15rem;
      }
      .about {
        display: flex;
        width: 100%;
        display: flex;
        color: white;
        justify-content: center;
        flex-direction: column;
        align-items: center;
      }
      .content {
        height: 10rem;
        width: 50rem;
        /* border: 1px solid; */
        margin-top: 1rem;
        margin-bottom: 1rem;
        border-radius: 1rem;
        padding: 1rem;
        font-size: 1rem;
        background-color: #2d2a32;
      }
      #About {
        margin-top: 1rem;
        font-size: 4rem;
      }
      footer {
        position: relative;
        bottom: 0;
        display: flex;
        justify-content: center;
        padding: 1rem;
        background-color: #1e2222;
        margin-top: 1rem;
        color: white;

      }
      a {
        display: inline-block;
        text-decoration: none;
        outline: none;
        border: none;
        color: black;
      } 

      .underline {
        background-repeat: repeat-x;
      }

      .underline--stars {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/78779/star.svg");
        background-position: 0 1.06em;
        background-size: 10px 9px;
        
      }
      .growth{
        height: 200px;
        width: 200px;
        position: absolute;
        top: 4rem;
        left: 3rem;
      }
      .sup{
        height: 200px;
        width: 200px;
        
        position: absolute;
        top: 30rem;
        right: 3rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="logo"><img src="lifecycle.png" alt="" /></div>
        <p class="pro">PRODUCTIVE TOOL</p>
        <ul class="nav-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="#ab">About</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
    <img src="growth.png" alt="growth" class="growth">
    <img src="support.png" alt="support" class="sup">
    <!-- Your main content goes here -->
    <div class="mcontainer">
      <div class="flex-container1">
        <div class="items1 i11">HiTech</div>
        <div class="items1 i21">Health Care</div>
        <div class="items1 i31">Life Sciences</div>
        <div class="items1 i41">GE</div>
        <a href="second.php"
          ><div class="items1 i51">Manufacturing</div></a
        >
        <div class="items1 i61">Energy & Resources</div>
      </div>
    </div>

    <!-- About us section -->
    <div class="about" id="ab">
      <div id="About">
        About Us
      </div>
      <div class="content">
        Tata Consultancy Services Limited (TCS) is an Indian multinational
        information technology (IT) services and consulting company
        headquartered in Mumbai. It is a part of the Tata Group and operates in
        150 locations across 46 countries.
      </div>
    </div>

    <!-- Footer section -->
    <footer>
      <p>Copyright&copy;Mohan Vamsi Bannela. All rights reserved.</p>
    </footer>
  </body>
</html>

<!doctype html>
<html lang="en">
<head>
<title>4Change International Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<!--stylesheets-->
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/form.css" />    
<!--for fontawesome icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--flexbox stylesheet-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--reCaptcha-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper"><!--open wrapper div-->
    <div class="logo" id="logo"><h1><a href="index.php">4Change International Group</a></h1></div>
    <div class="description" id="description"><h2>Full Service International Brand Development</h2></div>
    <!--<img alt="4Change Banner" src="images/1280x500.jpg"/>-->
    <div class="containers"><!--open containers div-->
    <!--Begin Header-->
    <header>        
        <!--Begin Navigation-->
        <div class="navigation">
        <div class="topnav" id="myTopnav">
        <nav>
            <a class="active" href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="brands.php">Brands</a>
            <a href="contactus.php">Contact Us</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
        </div></div>
        <!--responsive script for nav-->
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>
        <!--End Navigation-->
    </header>
    <!--End Header-->
</div>
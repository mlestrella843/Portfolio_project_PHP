<?php 
    session_start();
    if( isset($_SESSION['user']) != "Mestrella" ){
        header("location:session.php");
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

   <div class="container">

    <a href="index.php">Home</a> |
    <a href="portfolio.php">Portfolio</a> |
    <a href="closeSession.php">Sign Out</a> |
    <br/>



 







    
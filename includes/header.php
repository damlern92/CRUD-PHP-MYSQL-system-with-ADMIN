<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="main.css">

        <title><?php echo $page_title; ?></title>
    </head>
    <body>

        <div id="wrapper">

            <?php 
                if(!isset($_SESSION['username'])){
                    echo "<h1>PHP CRUD system with admin panel</h1>";
                    echo "<a href='admin'>Login to Admin panel</a>";
                }else{
                    echo "<h1>PHP CRUD system with admin panel</h1>";
                    echo "Loggedin as <span style='font-size:20px;'>".$_SESSION['username']."</span> <br><a href='admin' style='color:blue;font-size:25px;'> Access to Admin panel</a><br><br>";
                }
            ?>

            <div id="main">
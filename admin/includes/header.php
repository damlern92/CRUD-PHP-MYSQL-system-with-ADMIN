<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="assets/form.css">
        <script src="assets/js/jquery-3.6.0.js"></script>
        <script src="assets/js/main.js"></script>
        <title><?php echo $page_title; ?></title>
    </head>
    <body>
        <div id="wrapper">
            
            <div id="main">
<?php
    if(isset($_SESSION['username'])){ ?>
         <div class="loggedin">
            <h1>This is admin page</h1>
            <h3><span style="font-size:25px; "><?php echo $_SESSION['username']; ?></span> you are loggedin welcome to your page <a href="logout">Logout</a></h3>
        </div>
<?php } ?>
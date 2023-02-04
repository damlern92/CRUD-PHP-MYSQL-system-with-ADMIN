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
            <span style="font-size:25px; ">Welcome <?php echo $_SESSION['username']; ?></span><span> you are loggedin to your page</span>
            <br><br>
            <a href="../" id="home-link">User panel</a> |
            <a href="logout" id="logout-link">Logout</a>
        </div>
        <br>
<?php } ?>
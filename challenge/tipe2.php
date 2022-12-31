<?php 
session_start();
session_destroy();
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('http://idhaampedia.me/404.php');
die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,
        initial-slace=1.0" />
        <title>Capture The Flag</title>
                <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Maiden+Orange&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Iceberg" rel="stylesheet" />
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style type="text/css">
    body {
	   font-family: 'Maiden Orange', cursive;
	   display: block;
	   width: 100%;
	   margin: 0;
	   text-align: center;
	   font-family: 'Montserrat', sans-serif;
	   overflow-x: hidden;
       background: rgb(30, 0, 54);
       text-decoration: none;
       color: white;
    }
    .contentadmin {
	   width: 90%;
	   display: block;
	   margin: -13px auto;
	   padding: 20px 0;
    }    
    .btn-content {
	    font-family: 'Maiden Orange', cursive;
	    width: 350px;
	    margin: 25px auto;
	    padding: 10px;
	    background: rgb(197, 6, 6);
	    border: 1px solid rgb(197, 6, 6);
	    color: #fff;
	    font-size: 1.5em;
	    border-radius: 8px;
	    outline: none;
	    cursor: pointer;
        letter-spacing: 5px;
        color: white;
    }
    .footer {
        background: rgb(89, 9, 136);
        color: white;
        height: 380px;
        width: 100%;
        text-align: center;
    }   
    .tmd {
        font-family: Iceberg;
        font-size: 30px;
        color: white;
        -webkit-text-stroke: 1px red;
        text-shadow: 0px 4px 0px red;
    }

    h1 {
        font-weight: bold;
    }
    </style>
    <body>        
        <br>
        <center><img src="https://h.top4top.io/p_2534lss211.png" width="310" height="310" alt="20200703-222541" ></center>
        <a href="index.php" style="text-decoration: none;"><button class="btn-content">HOME LEVEL</button></a>
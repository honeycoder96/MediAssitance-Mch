<?php

  session_start();
  
require_once("connectvars.php");
   // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['username'])) {
    if (isset($_COOKIE['username'])) {
      $_SESSION['username'] = $_COOKIE['username'];
    }
  }
   if(!isset($_SESSION['usermain'])) {
    if (isset($_COOKIE['usermain'])) {
      $_SESSION['usermain'] = $_COOKIE['usermain'];
    }
  }
  if(isset($_SESSION['usermain']))
  {
	 $home_url = 'http://'.DB_HOST.'/Hospital/mainhospital.php';
  header('Location: ' . $home_url);
  }
 if(isset($_SESSION['username']))
  { 

  $home_url = 'http://'.DB_HOST.'/Hospital/patient.php';
  header('Location: ' . $home_url);
  }
  
?>
<html ng-app="indexapp">
<head >
<title>Admin page</title>

<link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="angular-loader/build/loading-bar.css">
<script type="text/javascript" src="angular.min.js"></script>
<script type="text/javascript" src="angular-route.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.backstretch.min.js"></script>
<script type="text/javascript" src="angular-loader/build/loading-bar.js"></script>
<script src="indexroute.js"></script>


</head>

<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li> <a href="success.html">Home</a>
                   <li> <a href="about.html">About</a>
                <li> <a href = "patient.html">Patients</a> </li>
                <li> <a href = "hospitals.html">Hospitals</a> </li>
                <li> <a href = "record.php">Symptoms</a> </li>
            </ul>
        </div>
    </div>
</nav>

<body>

<div class="ng-view"></div>
</body>
<script>
 $.backstretch([
      "HOSPITALHEART_1stblue.jpg",
      "HOSPITALHEART1_midblue.jpg",
      "HOSPITALHEART1_lastblue.jpg"    
      ], {
        fade: 1050,
        duration: 500
    });


</script>
</html>

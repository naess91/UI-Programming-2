<!---
File: index.php

This file contains html code to play snake

Requires: main.js

Version 1.0
Author: Erik Naess

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Starter Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  

  <!-- Custom styles for this template -->
  <link href="../css/base.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


</head>

<body>
<!-- Navbar comes here -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.html">Funny clips</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../clips.php">Clips</a></li>
        <li><a href="../scoreboard.php">Scoreboard</a></li>
        <li class="active"><a href="../games.php">Games</a></li>
        <li><a href="../help.php">Help</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- Navbar endes here -->
<div class="container">

  <div class="starter-template">
 <!-- Page Content -->

 <div class="row">
 <ol class="breadcrumb">
  <li><a href="../games.php">Games</a></li>
  <li class="active">Snake</li>
</ol>
<div class = "snake">
<h2>Snake</h2>
<p>Use arrows to steer the snake</p>  
<canvas id = "canvas" width = "400" height = "400"></canvas>
</div>

</div><!-- /.container -->

<footer class="footer">
      <div class="container">
        <a href="login/">Login as administrator here</a>
      </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="main.js"></script>
</body>
</html>


 

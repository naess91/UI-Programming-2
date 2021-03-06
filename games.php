<!---
File: games.php

This file contains html code to for entering game pages


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

  <title>Funny clips</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  

  <!-- Custom styles for this template -->
  <link href="css/base.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vote/css/style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">


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
      <a class="navbar-brand" href="index.html">Funny clips</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="clips.php">Clips</a></li>
        <li><a href="scoreboard.php">Scoreboard</a></li>
        <li class = "active"><a href="games.php">Games</a></li>
        <li><a href="help.php">Help</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Navbar endes here -->
<div class="container">
 <!-- Page Content -->
  <div class="starter-template">
    <h1>Funny Games</h1>


 <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/snake.png" alt="...">
      <div class="caption">
        <h3>Snake</h3>
        <p>...</p>
        <p><a href="snake" class="btn btn-default" role="button">PLAY</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/breakout.png" alt="...">
      <div class="caption">
        <h3>Breakout</h3>
        <p>...</p>
        <p><a href="breakout" class="btn btn-default" role="button">PLAY</a></p>
      </div>
    </div>
  </div>
</div>


</div><!-- /.container -->
<footer class="footer">
      <div class="container">
        <a href="login/">Login as administrator here</a>
      </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/voting.js"></script>
</body>
</html>
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
<?php include(__DIR__ . '/../navbar.php'); ?>

<!-- Navbar endes here -->
<div class="container">

  <div class="starter-template">
 <!-- Page Content -->

 <div class="row">
<div class = "snake">
<h2>Snake</h2>
<p>Use arrows to steer the snake</p>  
<canvas id = "canvas" width = "400" height = "400"></canvas>
</div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="main.js"></script>
</body>
</html>


 

<!---
File: Scoreboard.php

This file contains html, javascript and php code for presenting the clip scoreboard

Version 1.0
Author: Erik Naess

-->
<?php

// fetch database credentials
require_once('config.php');

// setup sql request
$query = 'SELECT * FROM voting ORDER BY vote DESC LIMIT 10 ';

// prepare sql
$stmt = $dbh->prepare($query);

// execute sql
$stmt->execute();


?>
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
  <link href="css/base.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vote/css/style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">

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
      <a class="navbar-brand" href="index.html">Funny clips</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="clips.php">Clips</a></li>
        <li class="active"><a href="scoreboard.php">Scoreboard</a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="games.php">Games</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Navbar endes here -->
<div class="container">
 <!-- Page Content -->
  <div class="starter-template">
    <h1>Scoreboard</h1>


        <div class="row"> 
        
<!-- Fetch slider plugin -->
<ul class="bxslider">       
<?php 
// Present the scoreboard ratings 1-10
$num = 1;
// Presenting sql data with a while loop
while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
<!-- Presenting youtube embed or local file in a slider -->
<li>
   <div class="embed-responsive embed-responsive-16by9 scoreboard">
<video controls class="embed-responsive-item" src="<?php echo $row['local_video'] ?>"></video>
<iframe class="embed-responsive-item" src="<?php echo $row['youtube_link'] ?>" allowfullscreen></iframe>
</div> 

		<div data-postid="<?php echo $row['id'] ?>" data-score="<?php echo $row['vote'] ?>">
			<div class="vote-span"><!-- voting-->
				<div class="vote" data-action="up" title="Vote up">
					<i class="icon-chevron-up"></i>
				</div><!--vote up-->
				<div class="vote-score"><?php echo $row['vote'] ?></div>
				<div class="vote" data-action="down" title="Vote down">
					<i class="icon-chevron-down"></i>
				</div><!--vote down-->
			</div>
            <div class = "scoreboard-content">
            <p class = "score"><?php echo $num++ ?>.</p>
				<p><?php echo $row['title']?></p>
                </div>
		</div><!--item-->
        </li>
		<?php endwhile;?>
</ul>
		
	</div>
	
           



</div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/voting.js"></script>
<script src="js/plugins/jquery.fitvids.js"></script>
<script src="js/plugins/jquery.bxslider.js"></script>
<script>
$('.bxslider').bxSlider({
  video: true,
  useCSS: false
});
</script>
</body>
</html>
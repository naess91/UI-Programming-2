<?php

include('config.php');

# connect mysql db
dbConnect();

$query = mysql_query(
	'SELECT * FROM  voting ');
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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Kill time movies</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#movies">Movies</a></li>
        <li><a href="#scoreboard">Scoreboard</a></li>
        <li><a href="#help">Help</a></li>
        <a href = "login/"><button type="button" class="btn btn-lg btn-primary">Login</button></a>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">

  <div class="starter-template">
    <h1>This site is under construction</h1>
 <!-- Page Content -->

        <div class="row">
<?php while($row = mysql_fetch_array($query)): ?>
 <div class="col-lg-3  col-xs-6 thumb">
   <div class="embed-responsive embed-responsive-4by3">
<?php if ($row['local_video'] > NULL) { ?>    
<video controls class="embed-responsive-item" src="<?php echo $row['local_video'] ?>"></video>
<? } else {  ?>
<iframe class="embed-responsive-item" src="<?php echo $row['youtube_link'] ?>"></iframe>
<? }?>
</div> 

		<div class="item" data-postid="<?php echo $row['id'] ?>" data-score="<?php echo $row['vote'] ?>">
			<div class="vote-span"><!-- voting-->
				<div class="vote" data-action="up" title="Vote up">
					<i class="icon-chevron-up"></i>
				</div><!--vote up-->
				<div class="vote-score"><?php echo $row['vote'] ?></div>
				<div class="vote" data-action="down" title="Vote down">
					<i class="icon-chevron-down"></i>
				</div><!--vote down-->
			</div>
				<p><?php echo $row['title']?></p>
                <p><?php echo $row['category']?></p>	
		</div><!--item-->
        </div>
		<?php endwhile?>

		
	</div>
	<?php dbConnect(false); ?>
           



</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/voting.js"></script>
</body>
</html>
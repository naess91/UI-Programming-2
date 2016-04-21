<?php

require_once('config.php');



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
<!-- Navbar comes here -->
<?php include 'navbar.php' ?>
<!-- Navbar endes here -->
<div class="container">

  <div class="starter-template">
    <h1>This site is under construction</h1>
 <!-- Page Content -->

        <div class="row">
<?php while($row = mysql_fetch_array($query)): ?>
 <div class="col-lg-4  col-xs-6 thumb">
   <div class="embed-responsive embed-responsive-16by9">
<?php if ($row['local_video'] > NULL) : ?>    
<video controls class="embed-responsive-item" src="<?php echo $row['local_video'] ?>"></video>
<? else :  ?>
<iframe class="embed-responsive-item" src="<?php echo $row['youtube_link'] ?>" allowfullscreen></iframe>
<? endif?>
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
		<?php endwhile;?>

		
	</div>
	
           



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
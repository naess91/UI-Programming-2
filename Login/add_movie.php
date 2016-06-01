<!---
File: add_movie.php

This file contains the basic html and javascript code to add clips into the database

Requires add_movie_controller.php

Version 1.0
Author: Erik Naess

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="graphical-tutorial.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
       <?php include "sidebar.php"; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="row">
     
           
                <canvas onclick="hideCanvas()" id="myCanvas"></canvas>
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        
               <script>
	  var canvas = document.getElementById('myCanvas');
   
	  canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
   	  var context = canvas.getContext('2d');
      // begin custom shape
	  // begin custom shape
      context.beginPath();
      context.moveTo(170, 90);
	  // defining rectangles
      context.rect(220,67,378,40);
      context.rect(220,151,378,40);
      context.rect(220,232,378,40);
	  context.rect(220,272,378,40);
	  // Text for boxes 
	  context.font = "16px Arial";
	  context.fillText("Define the title of video",615,93);
	  context.fillText("Choose category for the video", 615,175);
	  context.fillText("Choose if the video is a local file or youtube embeded", 615, 257);
	  context.fillText("Add link to local folder or youtube link", 615, 300);

      // complete custom shape
      context.closePath();
      context.lineWidth = 3;
      context.strokeStyle = 'blue';
      context.stroke();

			   </script>
                       
 <form name="form1" id = "addMovieForm" method="post" action="add_movie_controller.php">
 <fieldset class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input name="title" type="text" id="title" class="form-control">
  </fieldset>
  <fieldset class="form-group">
   <label for="formGroupExampleInput">Video type & link</label>
    <select data-role="none" name="select2[]" class="form-control" id="mySelect" data-theme="e">
        <option value="link" selected="selected" >Choose type</option>
        <option value="local_video" >Local video</option>
         <option value="youtube_link" >Youtube link</option>
    </select>
        <input type="text" name="" id=""  data-theme="d" data-inline="true" class="form-control">
        </fieldset>
   	<input type="submit" name="Submit" value="Submit"></td>
</form>

        <a href="#menu-toggle" style = "z-index:2;" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <button onclick="showCanvas()">Tutorial</button>
                    </div>
       
          </div>
        
        <!-- /#page-content-wrapper -->

    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
	<!-- show/hide canvas -->
	function showCanvas() {
                var showme = document.getElementById("myCanvas");
                showme.style.visibility = "visible";
            }
			
	function hideCanvas() {
                var showme = document.getElementById("myCanvas");
                showme.style.visibility = "hidden";
            }		
	<!-- show/hide element -->
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
	
	<!-- change element id depending on youtube link or local file -->
	$(function(){
    $('#mySelect').on('change', function() {
        var value = $(this).val();
        //alert to show I'm getting the value
        console.log($(this).nextAll('input[type="text"]').attr('name',value).attr('id',value));
    });
});
    </script>

</body>

</html>
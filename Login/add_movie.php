<?php
	require_once('auth.php');
?>
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
    <link href="../css/admin.css" rel="stylesheet">
    <link href="../css/base.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        <? echo $_SESSION['USERNAME']; ?>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <br />
                <br />
                <li>
                   <a href="../index.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
            <div class="container-fluid">
               <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                       
 <form name="form1" method="post" action="add_movie_controller.php">
 <fieldset class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input name="title" type="text" id="title" class="form-control">
  </fieldset>
  <fieldset class="form-group">
    <label for="formGroupExampleInput">Category</label>
    <input name="category" type="text" id="category" class="form-control">
  </fieldset>
    <select data-role="none" name="select2[]" class="mySelect" data-theme="e">
        <option value="link" selected="selected" >Choose link</option>
        <option value="local_video" >Local video</option>
         <option value="youtube_link" >Youtube link</option>
    </select>
        <input type="text" name="" id=""  data-theme="d" data-inline="true" class="form-control">
   	<input type="submit" name="Submit" value="Submit"></td>
</form>

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
       
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
	$(function(){
    $('.mySelect').on('change', function() {
        var value = $(this).val();
        //alert to show I'm getting the value
        alert (value);
        console.log($(this).nextAll('input[type="text"]').attr('name',value).attr('id',value));
    });
});
    </script>

</body>

</html>
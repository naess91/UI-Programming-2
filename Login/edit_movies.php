<?php


require_once('connection.php');

$youtube = 'SELECT id, title, category, vote, youtube_link FROM voting where local_video is null';

$stmt1 = $dbh->prepare($youtube);

$stmt1->execute();

$local = 'SELECT id, title, category, vote, local_video FROM voting where youtube_link is null';

$stmt2 = $dbh->prepare($local);

$stmt2->execute();

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
        <div class="container-fluid">
        <label for="name" class="control-label"><p class="text-info">Saghir</p><i class="icon-star"></i></label>
<div class="controls">
   <a href="#" id="edit" class="btn">Edit</a>
</div>
   <h3>Youtube videos</h3>          
  <?php while($row = $stmt1->fetch(PDO::FETCH_ASSOC)): ?>      
        
  <div class="media" id="<?php echo $row['id'] ?>" >
  <div class="media-left">
  
<iframe class="edit-video-thumb"  src="<?php echo $row['youtube_link'] ?>" allowfullscreen></iframe>
  </div>
  <div class="media-body">
    <h5 class="media-heading"><?php echo $row['title']?></h5>
                <p><?php echo $row['category']?></p>
                <br />
                <p><?php echo $row['youtube_link']?></p>
 
  </div>
</div>
<?php endwhile;?>


<h3>Local videos</h3>
 <?php while($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)): ?>      
        
  <div class="media" id="<?php echo $row1['id'] ?>" >
  <div class="media-left">
<video class="edit-video-thumb" src="../<?php echo $row1['local_video'] ?>"></video>
  </div>
  <div class="media-body">
    <h5 class="media-heading"><?php echo $row1['title']?></h5>
                <p><?php echo $row1['category']?></p>
                <br />
                <p><?php echo $row1['local_video']?></p>
 
  </div>
</div>
<?php endwhile;?>
            
             
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
	$('#edit').click(function() {
 var text = $('.text-info').text();
 var input = $('<input id="attribute" type="text" value="' + text + '" />')
 $('.text-info').text('').append(input);
 input.select();

 input.blur(function() {
   var text = $('#attribute').val();
   $('#attribute').parent().text(text);
   $('#attribute').remove();
 });
});
	
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
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
<?php


require_once('connection.php');



// Get values from form 
$title=$_POST['title'];
$category=$_POST['category'];
$youtube_link=$_POST['youtube_link'];
$local_video=$_POST['local_video'];

// Insert data into mysql 
$query = "INSERT INTO voting(title, category, youtube_link, local_video)VALUES('$title', '$category', '$youtube_link', '$local_video' )";
$result = $dbh->prepare($query);
$result->execute();


// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='add_movie.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 


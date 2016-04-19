<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="Login"; // Database name 
$tbl_name="voting"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$title=$_POST['title'];
$category=$_POST['category'];
$youtube_link=$_POST['youtube_link'];
$local_video=$_POST['local_video'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(title, category, youtube_link, local_video)VALUES('$title', '$category', '$youtube_link', '$local_video' )";
$result=mysql_query($sql);

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

<?php 
// close connection 
mysql_close();
?>
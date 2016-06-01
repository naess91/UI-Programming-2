<!---
File: auth.php

This file contains the basic html and javascript code to add clips into the database

Requires add_movie_controller.php

Version 1.0
Author: Erik Naess

-->
<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: index.php");
		exit();
	}
?>
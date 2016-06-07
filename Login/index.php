<!---
File: index.php

This file contains the basic html and javascript code to login

Version 1.0
Author: Erik Naess

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin login</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/form-elements.css">
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <!-- Top content -->
        <div class="top-content" id = "login">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form"  method="post" class="login-form" action="login_exec.php">
			                    <tr>
                                    <td colspan="2">
                                		<!--the code bellow is used to display the message of the input validation-->
                                		 <?php
                                			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                			echo '<ul class="err">';
                                			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                				echo '<li>',$msg,'</li>';
                                				}
                                			echo '</ul>';
                                			unset($_SESSION['ERRMSG_ARR']);
                                			}
                                		?>
                                	</td>
                                  </tr>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit"  class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
<script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <script src="../js/scripts.js"></script>
</body>
</html>
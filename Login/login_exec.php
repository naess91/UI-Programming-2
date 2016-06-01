<!---
File: login_exec.php

This file contains php code to execute a login

Version 1.0
Author: Erik Naess

-->
<?php
session_start();
$errmsg_arr = array();
$errflag = false;
require_once('connection.php');
// new data
 
$user = $_POST['username'];
$password = $_POST['password'];

// check if correct credentials have been filled in
 
if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
 
// query
$result = $dbh->prepare("SELECT * FROM member WHERE username= :hjhjhjh AND password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: home.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
 
?>
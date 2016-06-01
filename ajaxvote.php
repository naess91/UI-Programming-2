<!---
File: axajvote.php

This file contains php code to handle the voting of video clips

Version 1.0
Author: Erik Naess

-->

<?php

include('config.php');
# start new session
session_start();

if ($_SERVER['HTTP_X_REQUESTED_WITH']) {
	if (isset($_POST['postid']) AND isset($_POST['action'])) {
		$postId = $_POST['postid'];
		# check if already voted, if found voted then return
		if (isset($_SESSION['vote'][$postId])) return;
		# connect mysql db
		

		# query into db table to know current voting score 
		$query = "
			SELECT vote
			from voting
			WHERE id = '{$postId}' 
			LIMIT 1";

		$stmt = $dbh->prepare($query);

		$stmt->execute();

		# increase or dicrease voting score
		if ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			if ($_POST['action'] === 'up'){
				$vote = ++$data['vote'];
			} else {
				$vote = --$data['vote'];
			}
			# update new voting score
			$query = "
				UPDATE voting
				SET vote = '{$vote}'
				WHERE id = '{$postId}' ";

			$stmt = $dbh->prepare($query);

			$stmt->execute();

			# set session with post id as true
			$_SESSION['vote'][$postId] = true;
		
		}
	}
}
?>
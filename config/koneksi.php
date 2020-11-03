<?php
$connect = mysql_connect('localhost','root','febrorpl') or
	die("Connection Error, because <b>".mysql_error()."</b>");
$db = mysql_select_db('ukk') or die('Database Not Found, because <b>'.mysql_error().'</b>');
?>
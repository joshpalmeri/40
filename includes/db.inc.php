<?php
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link)
{
	$error = 'Unable to connect to the server database.';
	include 'error.html.php';
	exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'error.html.php';
	exit();
}

if (!mysqli_select_db($link, 'INSERT_DATABASE_NAME'))
{
	$error = 'Unable to locate the database.';
	include 'error.html.php';
	exit();
}
?>
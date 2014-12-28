<?php

require_once('../config.php');

function establishConnection()
{
	return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
}

function get_user_data($requestedInfo)
{
	if ($requestedInfo == "uid")
	{
		return $_SESSION['userData']['uid'];
	}
	if ($requestedInfo == "email")
	{
		return $_SESSION['userData']['email'];
	}
	if ($requestedInfo == 'nickname')
	{
		return $_SESSION['userData']['nickname'];
	}
}

?>
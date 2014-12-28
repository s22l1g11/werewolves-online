<?php

require_once('../config.php');

function establishConnection()
{
	return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
}

?>
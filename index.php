<?php
if (!isset($_SESSION))
{
	session_start();
}

require_once('system/content/main.php');
$main = new Main;

?>
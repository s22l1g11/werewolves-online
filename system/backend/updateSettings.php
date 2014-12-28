<?php

require_once('functions.php');

$db = establishConnection();
// create query
$query = "UPDATE ".DB_PREFIX."users SET email=:email, nickname=:nickname WHERE uid=:uid";
// prepare
$stmt = $db->prepare($query);
// bind param
$stmt->bindParam(":email", $_POST['email']);
$stmt->bindParam(":nickname", $_POST['nickname']);
$stmt->bindParam(":uid", $_POST['uid']);
// execute
if ($stmt->execute())
{
	setNewSessionValues();
	require_once('../content/html/updateSettingsSuccessful.html');
}
else
{
	require_once('../content/html/updateSettingsError.html');
}

function setNewSessionValues()
{
	$_SESSION['userData']['email'] = $_POST['email'];
	$_SESSION['userData']['nickname'] = $_POST['nickname'];
}

?>
<?php
require_once('functions.php');

class Content
{

	public function __construct()
	{
		$this->getContent();
	}
	
	private function getContent()
	{
		
		if ($_SESSION['userOnline'] === true && $_GET['action'] !== "" && $_GET['action'] !== "login")
		{
			$action = $_GET['action'];
			if ($action == 'dashboard')
			{
				require_once('dashboard.php');
			}
			
			if ($action == 'settings')
			{
				require_once('settings.php');
			}
		}
		else if ($_SESSION['userOnline'] === false && $_GET['action'] !== "login")
		{
			require_once('html/login.html');	
		}
		else
		{
			$this->login();			
		}
		
	}
	
	private function login()
	{
		// establish connection
			$db = establishConnection();
			// create query
			$query = "SELECT * FROM ".DB_PREFIX."users WHERE email LIKE :mail";
			// prepare
			$stmt = $db->prepare($query);
			// bind params
			$stmt->bindParam(":mail", $_POST['email']);
			// execute
			if ($stmt->execute())
			{
				// fetch
				$result = $stmt->fetchAll();
				// check
				if ($result[0]['email'] === $_POST['email'] && password_verify($_POST['password'], $result[0]['password']))
				{
					$_SESSION['userOnline'] = true;
					$_SESSION['userData'] = array("uid" => $result[0]['uid'], "email" => $result[0]['email'], "nickname" => $result[0]['nickname']); 
					require_once('html/loginSuccessful.html');
				}
				else {
					require_once('html/loginError.html');
				}
			}
	}
}

?>
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
		
		if ($_SESSION['userOnline'] === true)
		{
			/*
			 *
			 * 			 
			 */
		}
		else if ($_SESSION['userOnline'] === false)
		{
			require_once('html/login.html');	
		}
		
	}
}

?>
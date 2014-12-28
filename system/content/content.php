<?php
require_once('functions.php');

class Content
{
	private $contentHTML;
	
	public function __construct()
	{
		$this->contentHTML = $this->getContent();
	}
	
	private function getContent()
	{
		$content = "";
		
		if ($_SESSION['userOnline'] === true)
		{
			/*
			 * save into $content
			 */
		}
		else if ($_SESSION['userOnline'] === false)
		{
			$form = "";
			$form .= '
			<form action="?action=login" method="POST">
				<label>Email address:</label><br />
				<input type="email" name="email" required="required" autofocus="autofocus" /><br />
				<label>Password:</label><br />
				<input type="password" name="password" required="required" /><br />
				<button type="submit">Sign in</button>
			</form>
			';
			$content = $form;
		}
		
		// return $content
		return $content;
	}
}

?>
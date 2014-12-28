<?php

class Main
{
	public function __construct()
	{
		$this->createHead();
		$this->createBody();
		$this->createFooter();
	}
	
	private function createHead()
	{
		require_once('head.php');
	}
	
	private function createBody()
	{
		require_once('content.php');
		$content = new Content();
		echo $content->getHTML();
	}
	
	private function createFooter()
	{
		require_once('footer.php');
	}
}

?>
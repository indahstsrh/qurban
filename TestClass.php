<?php

class TestClass extends PHPUnit_Framework_TestCase
{
	public function testFile()
	{
		include 'file.php';
		$content = $user;
		$this->assertEquals(9, $content);

	}

	public function testemail()
	{
		include 'file.php';
		$content = $usernya;
		$this->assertEquals('sarahh@gmail.com', $content);

	}
}
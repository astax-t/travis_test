<?php

class MysqlTest extends \PHPUnit_Framework_TestCase
{
	protected $db_info;

	public function setUp()
	{
		$config = require(__DIR__ . '/config.php');

		if (file_exists(__DIR__ . '/config_local.php'))
			$config = require(__DIR__ . '/config_local.php');

		$this->db_info = $config['mysql'];
	}

	public function testMysqli()
	{
		$link = mysqli_connect($this->db_info['host'], $this->db_info['username'], $this->db_info['password'], $this->db_info['db_name']);
		$this->AssertTrue(is_object($link));
		mysqli_query($link, "CREATE TABLE test1 ( id INT; )");
	}
}

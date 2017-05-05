<?php
class MyConnection
{
	public $hostname;
	public $username;
	public $password;
	public $databasename;
	
	//public $config_basedir="";
	
	public function __construct()
	{
		$this->hostname="localhost";
		$this->username="hotliner";
		$this->password="8055pen";
		$this->databasename="hotliner_shop";
		
		//$this->$config_basedir = "http://localhost/MyTestPage/";
	}
}

?>

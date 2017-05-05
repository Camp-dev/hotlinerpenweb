<?php

require("../config/MySqlResult.php");

class MySql

{

	private $strConnection;

	private $strDatabase;

	private $strResult;

	private $strSOL;

	static $instances = 0;

	

	public function __construct($hostname, $username, $password)

	{

		$this->strConnection= mysql_connect($hostname,$username,$password) or  die ( mysql_error(). " Error no:".mysql_errno());

	}

	

	



	public function CreateResultSet($strSql,$databasename)

	{

		$rs=new MySqlResult($strSql,$databasename,$this->strConnection);

		return $rs;

	}

	

}

?>
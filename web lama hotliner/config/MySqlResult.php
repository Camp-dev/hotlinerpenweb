<?php

class MySqlResult

{

	private $strSQL;

	private $databasename;

	private $connection;

	private $result;

	public function __construct($strSql,$databasename,$connection)

	{

		//$this->strSQL = $strSQL;

		//$this->connection = $connection;

		//$this->databasename = $databasename;

		mysql_selectdb($databasename, $connection);

		//mysql_select_db($databasename,$connection);

		$this->result=mysql_query($strSql);

		//return $this->result;

		

	}



	public function getNumberRow(){

		return mysql_num_rows($this->result);

	}



	public function getRow(){

		return mysql_fetch_array($this->result);

	}



	public function getAssoc(){

		return mysql_fetch_assoc($this->result);

	}
}

?>
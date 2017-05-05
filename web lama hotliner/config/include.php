<?php
require("../config/mysqlconnection.php");
require("../config/configuration.php");
$con = new MyConnection();
$rs = new MySql($con->hostname,$con->username,$con->password);
?>

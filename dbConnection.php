<?php
	$TheUser="root";
	$ThePWord="";
	$default_dbname="smartvirtualtourism";

	$conn=mysql_connect("localhost","$TheUser","$ThePWord") or die("MySql Connection unsuccessful... ");
	$dbrs=mysql_select_db($default_dbname,$conn) or die("Database Selection unsuccessful... ".mysql_error());
	$sitetitle="STPF";


	function dbQuery($sql)
	{
		$result = mysql_query($sql) or die(mysql_error());

		return $result;
	}


	function dbAffectedRows()
	{
		global $dbConn;

		return mysql_affected_rows($dbConn);
	}

	function dbFetchArray($result) {
		return mysql_fetch_array($result);
	}

	function dbFetchAssoc($result)
	{
		return mysql_fetch_assoc($result);
	}

	function dbFetchRow($result)
	{
		return mysql_fetch_row($result);
	}

	function dbFreeResult($result)
	{
		return mysql_free_result($result);
	}

	function dbNumRows($result)
	{
		return mysql_num_rows($result);
	}


	function dbInsertId()
	{
		return mysql_insert_id();
	}


?>


<?php
class Sqlsrv
{
	private $con;
	public function getConnect()
	{
		$serverName			=	"192.168.110.125";
		$connectionInfo		=	array(
										"Database"		            =>	"OM_First_Lot",
										"UID"						=>	"innovation",
										"PWD"						=>	"Inno20i9",
										"MultipleActiveResultSets"	=>	true,
										"CharacterSet"			 	=>	'UTF-8',
										'ReturnDatesAsStrings'		=>	true
									);

		$this->con	=	sqlsrv_connect($serverName,$connectionInfo);
		if(!$this->con) {
			echo "<h1>Connection could not be established.</h1><hr><br />";
			die( '<pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
		}
		else
		{
			return	$this->con;
		}
	}
	public function getQuery($sql){
		// var_dump($sql);
		$query= sqlsrv_query($this->getConnect(), $sql) or die( "die SetQuery = " . print_r( sqlsrv_errors(), true));
		return $query;
	}
	public function getResult($query){
		return sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC);
	}
	public function getnumrow($query){
		return sqlsrv_num_rows($query);
	}
	public function destroy(){
		return sqlsrv_close($this->getConnect());
	}
}
class srvsql_login
{
	public function connect_signin()
	{
		$serverName			=	"10.10.2.31";
		$connectionInfo		=	array(
										"Database"					=>	"LeKise_Group",
										"UID"						=>	"innovation_hr",
										"PWD"						=>	"Passw0rd@2018LeKise20i8",
										"MultipleActiveResultSets"	=>	true,
										"CharacterSet"				=>	'UTF-8',
										'ReturnDatesAsStrings'		=>	true
									);
		$connect_signin		=	sqlsrv_connect($serverName,$connectionInfo);
		if(!$connect_signin) {
			echo "<h1>Connection could not be established.</h1><hr><br />";
			die( '<pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
		}
		else
		{
			return	$connect_signin;
		}
	}
}
?>
<?php


class Connection{
	
	public $userhost;
	public $username;
	public $userpass;
	public $dbname;
	public $connect;

	function __construct($host, $name, $pass,$db_name){

		$this->localhost=$host;
		$this->username=$name;
		$this->userpass=$pass;
		$this->dbname=$db_name;

		$this->connect=mysqli_connect($this->localhost,$this->username,$this->userpass,$this->dbname);

		if ($this->connect) {


			echo "qosuldu";
		}else{
			echo "tekrar cehd edin";
		}

	}
}

?>
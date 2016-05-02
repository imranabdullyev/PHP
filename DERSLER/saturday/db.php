<?php


class Conn {
	
	public $userhost;
	public $username;
	public $userpassword;
	public $dbname;
	public $connection;
 	
 	public function __construct($a,$b,$c,$d){
 	$this->userhost=$a;
	$this->username=$b;
	$this->userpassword=$c;
	$this->dbname=$d;
	

$this->connection=mysqli_connect($this->userhost,$this->username,$this->userpassword,$this->dbname);


	if ($this->connection) {
		echo "openssl_free_key(key_identifier)";
	}

 	} 


 
}

	



?>

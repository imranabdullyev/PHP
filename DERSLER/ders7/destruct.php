<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Dbconnect 
{
	public $server;
	public $username;
	public $pass;
	public $conn;

	function __construct($server,$username,$pass)
	{
		$this->server=$server;
		$this->username=$username;
		$this->pass=$pass;
	
	}


	function conncheck(){
		$this->conn=mysqli_connect($this->server,$this->username,$this->pass);
			if ($this->conn) {
				echo "connected";
			}
			else{
				echo "problemos";
			}
		}
	function __destruct(){
			$this->connCheck();
		}

	}


	function __destruct(){
		$this->conncheck();
	}


// class DbNameConn extends DbConnect
// 	{	   
// 		public $dbname;
// 		public $dbnameCon;
// 	    public function __construct()
// 	    {
// 	        $this->dbname = "masinlar";
// 	        $this->selectDb();
// 	    }

// 	    public function selectDb()
// 	    {
// 	    	$this->dbnameCon = mysqli_select_db($this->conn,$this->dbname);
// 	    	if($this->dbnameCon){
// 	    		echo "Database selected<br>";
// 	    	}else{
// 	    		echo "Not selected";
// 	    	}
// 	    }
// 	}

// 	$db=new DbNameConn("localhost","root");
?>
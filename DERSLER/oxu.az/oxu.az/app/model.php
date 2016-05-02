<?php 

class Connect
{
	public $hostName;
	public $userName;
	public $password;
	public $database;
	public $connect;

	function __construct($host,$user,$pass,$db)
		{
			$this->connect = mysqli_connect($this->hostName=$host,$this->user=$user,$this->password=$pass,$this->database=$db);

			if($this->connect) {
			  	echo "server ok";
			} else {
			  	echo "problem";
			}
		}
}






class News extends Connect
{
	public $title;
	public $text;
	public $img;
	public $desc;
	public $status;
	public $date;
	public $insert;
	public $connect;


	function __construct($connect,$title,$img,$img,$desc,$text,$status,$date)
	{
		$this->title=$title;
		$this->text=$text;
		$this->img=$img;
		$this->desc=$desc;
		$this->status=$status;
		$this->date=$date;
		$this->connect=$connect;
		$this->insert();

	}
	function insert(){
	$sql= "INSERT INTO news (news_title,news_thumbImg,news_img,news_desk,news_text,news_status,news_date) VALUES ('$this->title','$this->img','$this->img','$this->desc','$this->text','$this->status','$this->date') ";
	$query=mysqli_query($this->connect,$sql);
	if ($query) {
		echo " ishleyir ve sizin xeber yuklendi";
	}else{
		echo " yuklener";
	}
	}
}




?>
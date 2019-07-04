<?php 


 class Database
{
	private $host= "localhost";
	private $username= "root";
	private $pass= "";
	private $dbname= "db_lr";
	public $pdo;
    

    function __construct()
	{
		if (!isset($this->pdo)) {
			try {
				$link= new PDO("mysql:host=".$this->host."; dbname=".$this->dbname.",username=".$this->username.",password=".$this->pass."");
				$link= setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
				$link= exec("SET CHARACTER SET utf8");
				$this->pdo= $link;		
			} catch (PDOException $e) {
				die("failed to connect".$e->getmessage());
			}
		}
	}
}
?>
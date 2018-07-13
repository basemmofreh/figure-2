<?php
	class ConneDB {
		//connection variables 
		private $host = 'localhost';
		private $db_name = 'api';
		private $username = 'root';
		private $password = '';
		private $conn;
		
	public function connect(){
		$this->conn = null;
		
		
		try
		{
			$this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

		}
		catch(Exception $err){
			echo $err;
		}
		
		return $this->conn;
	}
		
}

?>
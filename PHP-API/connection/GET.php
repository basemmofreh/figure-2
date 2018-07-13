<?php
	class getData{
		private $conn;
		private $table ='products';
		
	
		public $id;
		public $category_name;
		public $title;
		public function __construct($db){
				$this->conn = $db;
		}
		
		public function read(){
			$query = "SELECT * FROM ".$this->table." ";
			$result = mysqli_query($this->conn,$query);
			return $result;
		}
	}
?>
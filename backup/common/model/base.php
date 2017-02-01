<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require_once '../PHPMailer/class.phpmailer.php';

session_start();
class Base{

	public $conn; 

	function __construct(){

		if($_SERVER['HTTP_HOST'] != 'localhost')
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=parisedu_pdaycare_db",'parisedu_care','PariS123');
		}else{

			$this->conn = new PDO("mysql:host=localhost;dbname=parisedu_pdaycare_db",'parisedu_care','PariS123');

		}

		//$this->conn = new PDO("mysql:host=localhost;dbname=daycare_db",'root','password');
		//session_start();

	}

	public function findByPk($id)
	{
		try{
				$statement =  $this->conn->prepare("select * from {$this->tableName()} where {$this->primary}={$id}");


				$statement->execute(); 
	    		$result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
				return $statement->fetch(); 
			
		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}
	//Find All Data
	public function findAll($options = array())
	{
		try{
			$limit = "";
			$order = "";
				if(isset($options['limit']))
				{
					$limit = " limit ". $options['limit']; 
				}

				if(isset($options['order']))
				{
					$order = " order by ". $options['order']; 
				}

			$sql = "select * from {$this->tableName()} ". $order .$limit; 
			//echo $sql; exit; 
				$statement =  $this->conn->prepare($sql);
				$statement->execute(); 
	    		$result = $statement->setFetchMode(PDO::FETCH_ASSOC); 

				return $statement->fetchAll(); 
			
		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}
public function findAllByLimit($limit)
	{
		try{
				$statement =  $this->conn->prepare("select * from {$this->tableName()} ORDER BY id DESC LIMIT   {$limit}"); 
				$statement->execute(); 
	    		$result = $statement->setFetchMode(PDO::FETCH_ASSOC); 

				return $statement->fetchAll(); 
			
		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}

	// function delete by PK
	public function deleteByPk($id)
	{
		try{

				$statement =  $this->conn->prepare("DELETE FROM {$this->tableName()} where {$this->primary}={$id}");
				return 	$statement->execute(); 

			
		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}

	
	// to save model data into db 

	public function save()
	{
		try{
			$dbColumns = $this->getAttributes(); 
			$tableName = $this->tableName(); 

			 $sql = " INSERT INTO {$tableName} ";
			$columns = "("; 		
			$values = " VALUES ("; 		

			foreach($this as $key=>$val)
			{

				if(in_array($key, $dbColumns))
				{
					$columns.=$key.",";
					$values.=":".$key.",";
				}
			}		

			$columns = rtrim($columns,',').")"; 

			$values = rtrim($values,',').")"; 

			 $sql.= $columns.$values;
			$statement =  $this->conn->prepare($sql);
			foreach($this as $key=>$val)
			{
				if(in_array($key, $dbColumns))
				{
					
					$statement->bindParam(":{$key}",$this->$key);
				}
			}	

			return $statement->execute();

		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}

public function update()
	{
		try{

			$dbColumns = $this->getAttributes(); 
			$tableName = $this->tableName(); 

			$sql = " UPDATE {$tableName}  SET ";
			$columns = ""; 		
			$values = ""; 		

			foreach($this as $key=>$val)
			{
				if(in_array($key, $dbColumns))
				{
					$columns.=$key."=:".$key." , ";
				
				}
			}		

			$columns = rtrim($columns,' , '); 

			 $sql.=$columns. " WHERE {$this->primary}=:id"; 
		
			$statement =  $this->conn->prepare($sql);
			
			foreach($this as $key=>$val)
			{
				if(in_array($key, $dbColumns))
				{
					$statement->bindParam(":{$key}",$this->$key);
				}
			}	
			if(isset($_GET['id'])){
				$id= $_GET['id'];
			}
			else{
				$id=$this->id;
			}
			
			$statement->bindParam(":id",$id);
			

			return	$statement->execute();

		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}
	public function count(){
		try{
			$tableName = $this->tableName(); 
			$sql = "SELECT count(*) FROM {$tableName}"; 
			$statement = $this->conn->prepare($sql); 
			$statement->execute(); 
		return	$number_of_rows = $statement->fetchColumn();
		}catch(PDOException $e)
		{
			print_r($e); 
		}
	}

}
?>
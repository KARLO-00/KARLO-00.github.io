<?php
set_time_limit(0);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);

class Postgresql
{

   private $conn;
   private $query;
   private $limit;
   private $sql;
   private $result = false;
 
   function __construct()
   {
      //  $this->conn  = $conn = pg_connect("host = 192.168.1.6 port = 5432 dbname = TEST user = postgres password=postgres") or die();
       $this->conn  = $conn = pg_connect("host = localhost port = 5432 dbname = postgres user = postgres password=admin") or die();
   }


   function query($sql)
   {

      try {
         $this->query = pg_query($this->conn, $sql) or die('Error message: ' . pg_last_error());
         return $this;
      } catch (Exception $e) {
         return $e;
      }
   }


   
	function limit($limit){
		$this->limit = $limit;
		return $this;
	}
	
   function fetchAll($sql)
   {
      $counter=0;
      $this->result = [];
      $this->query = pg_query($this->conn, $sql) or die('Error message: ' . pg_last_error());
      while ($result = pg_fetch_assoc($this->query)) {
         $counter++;
         $this->result[] = $result;
         if(isset($this->limit)){
				if($this->limit == $counter){
					break;		
				}
			}
      }
      if (!empty($this->result)) {
         return $this->result;
      }
   }

   function fetchRow($sql)
   {
       $this->result = false;
       if (is_string($sql)) {
           $this->query = pg_query($this->conn, $sql);
           if ($this->query) {
               $result = pg_fetch_array($this->query);
               if ($result) {
                   $this->result = $result;
               }
           } else {
               die('Error message: ' . pg_last_error());
           }
       } else {
           die('Error: SQL query must be a string.');
       }
       return $this->result;
   }
   

   function insert($data, $table)
	{
		$arr_column = array_keys($data);
		$columns = implode(',',$arr_column);

		$arr_values = array_values($data);
		$values = "'" . implode ( "', '", $arr_values ) . "'";

		$sql = "INSERT into $table ($columns) values( $values) ";
		try {
			$this->query = $query = pg_query($this->conn, $sql) or die('Error message: ' . pg_last_error());
			return $this;
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}

   function insert_get_id($data, $table)
	{
		$arr_column = array_keys($data);
		$columns = implode(',',$arr_column);

		$arr_values = array_values($data);
		$values = "'" . implode ( "', '", $arr_values ) . "'";

		$sql = "INSERT into $table ($columns) values( $values) returning id";
		try {
         $this->result = false;
			$this->query = $query = pg_query($this->conn, $sql) or die('Error message: ' . pg_last_error());
			while ($result = pg_fetch_array($this->query)) {
            $this->result = $result;
         }
         if (!empty($this->result)) {
            return $this->result;
         }
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}
}
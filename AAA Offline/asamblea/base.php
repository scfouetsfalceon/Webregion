<?php

class base {
		private $conex;
		private $host = "localhost";
		private $user = "scoutsfa_scouts";
		private $pass = "carirubana10";
		private $db = "scoutsfa_asamblea";
		private $query;
		public $numberq;
		
	function __construct() {
		$this->conex = @mysql_connect($this->host, $this->user, $this->pass);
		@mysql_select_db($this->db);
	}
	
	function select($string) {
		$this->query = @mysql_query($string);
		if ( $this->query == true ) {
			$this->numberq = @mysql_num_rows($this->query);
			return $this->query;
		} else {
			return false;
		}
		}
		
	function selectUnique($string) {
		$this->query = @mysql_query($string);
		if ( $this->query == true ) {
			return @mysql_fetch_object($this->query);
		} else {
			return false;
		}
		}
		
	function nextObject($result = NULL) {
		if ( $result == NULL ) {
			$result = $this->query;
		}
		if ( $result == NULL || $this->numberq 	< 1 ){
			return NULL;
		} else {
			return @mysql_fetch_object($result);
		}
			
	}
		
	function insert($string) {
		$query = @mysql_query($string);
		if ( $query == true ) {
			return @mysql_affected_rows();
		} else {
			return false;
		}
		}
		
	function update($string) {
		$query = @mysql_query($string);
		if ( $query == true ) {
			return @mysql_affected_rows();
		} else {
			return false;
		}
		}
		
	function delete($string) {
		$query = @mysql_query($string);
		if ( $query == true ) {
			return @mysql_affected_rows();
		} else {
			return false;
		}
		}
		
	function error() {
		return @mysql_error();
	}
		
	function __destruct() {
		@mysql_close($this->conex);
	}
		
}

?>

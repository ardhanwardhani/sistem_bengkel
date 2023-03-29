<?php 
class database{

	private $hostDB	=	"localhost";
	private $user	=	"root";
	private $pass	=	"";
	private $db 	=	"ujikom_bengkel";

	function connect(){
		mysql_connect($this->hostDB, $this->user, $this->pass);
		mysql_select_db($this->db) or die ('Cannot found database :(');

	//$con = new mysqli_connect($this->$hostDB, $this->$user, $this->$pass, $this->db);

	//if(mysqli_connect_errno()){
	//	echo "Failed to connect to MySQL : ". mysqli_connect_error();
	}

}

class session{
	function __construct(){
		session_start();
	}

	function set($username){
		$_SESSION['username'] = $username;
	}

	function check(){
		return isset($_SESSION['username']);
	}

	function destroy(){
		session_destroy();
	}

}

$con = new database;
$session = new session;
$_SESSION["cek"] = "ada";
$con->connect();

/**
* 
*/

 ?>
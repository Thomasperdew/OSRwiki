<?php
class Dao {
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_10aa37358da4f01";
  private $user = "be72e1d5d10f7b";
  private $pass = "570ee2c1";
  public function getConnection () 
  {
       $conn= new PDO("mysql:host={$this->host}; dbname={$this->db}", $this->user,
          $this->pass);
		return $conn;
  }

    public function getLogin ($username) {
		$conn = $this->getConnection();
		$loginQuery = "select * from user where username = :username";
		$q = $conn->prepare($loginQuery);
		$q->bindParam(":username", $username);
		$q->execute();
		return $q->fetchAll();

	}

    public function saveLogin ($username, $password, $email) 
	{
		$conn = $this->getConnection();
		$passhash = password_hash($password, PASSWORD_DEFAULT);
		$saveQuery ="INSERT INTO user(username, password, email)VALUES(:username, :password, :email)";
		$q = $conn->prepare($saveQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $passhash);
		$q->bindParam(":email", $email);
		$q->execute();
	}
  }
  ?>
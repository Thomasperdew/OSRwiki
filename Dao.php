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

    public function getLogin ($username, $password) {
		$conn = $this->getConnection();
		return $conn->query("SELECT count(*) from (select username, password from user where username = 'tom' and password = 'me') as x;", PDO::FETCH_ASSOC);
	}

    public function saveLogin ($username, $password, $email) 
	{
		$conn = $this->getConnection();
		$saveQuery ="INSERT INTO user(username, password, email)VALUES(:username, :password, :email)";
		$q = $conn->prepare($saveQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
		$q->bindParam(":email", $email);
		$q->execute();
	}
  }
  ?>
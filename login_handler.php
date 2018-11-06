
  <?php
// Dao.php
// class for getting products in MySQL

class Dao {

  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_10aa37358da4f01";
  private $user = "be72e1d5d10f7b";
  private $pass = "570ee2c1";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

  public function getLogin () {
    $conn = $this->getConnection();
    $getQuery = "SELECT id, username, password FROM user WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
	if ($q->fetchAll())
	{
	$_SESSION['logged_in'] = true;
    header('Location: /Website/index.php');
    exit;
	}
	else{
	$_SESSION['logged_in'] = false;
	$_SESSION['message'] = "Username or password invalid";
  header('Location: /Website/login.php');
  exit;}

  }


}
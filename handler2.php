<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['password'] = $password;

$messages = array();
$presets = array();


require_once 'Dao.php';
$dao = new Dao();
$count = $dao->getLogin($username, $password);
echo var_dump($count);

foreach ($count as $other) {
	echo var_dump($other);
	if ($other != 0) {
	//Everything was validated
	$_SESSION['logged_in'] = 'true';
	//header('Location: index.php');
	exit;
	}
}

//$row_count = mysql_num_rows($count);



    $_SESSION['logged_in'] = false;
	$_SESSION['message'] = "Username or password invalid";
	//header('Location: /Website/login.php');
	exit;
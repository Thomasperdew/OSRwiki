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
$login = $dao->getLogin($username)[0];

	if (password_verify($password, $login['password'])){
	$_SESSION['logged_in'] = 'true';
	header('Location: index.php');
	exit;
	}
	
	$_SESSION['logged_in'] = false;
	$_SESSION['message'] = "Username or password invalid";
	header('Location: Login.php');
	exit;
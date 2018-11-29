<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['password'] = $password;
$_SESSION['presets']['email'] = $email;

$messages = array();
$presets = array();
$bad = false;

// Got here, means everything validated, and the comment will post.
unset($_SESSION['presets']);
require_once 'Dao.php';
$dao = new Dao();
$dao->saveLogin($username, $password, $email);
$_SESSION['message'] = "Thanks for joining";
header('Location: login.php');
exit;
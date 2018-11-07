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
if (empty($username)) {
  $_SESSION['messages'][] = "Username is required.";
  $bad = true;
}
if (empty($password)) {
  $_SESSION['messages'][] = "Password is required.";
  $bad = true;
}

if (empty($email)) {
  $_SESSION['messages'][] = "Email is required.";
  $bad = true;
}

if ($bad) {
  header('Location: /Website/index.php');
  $_SESSION['validated'] = 'bad';
  exit;
}

// Got here, means everything validated, and the comment will post.
$_SESSION['messages'][] = "Thanks for joining!";
$_SESSION['validated'] = 'good';
unset($_SESSION['presets']);
require_once 'Dao.php';
$dao = new Dao();
$dao->saveLogin($username, $password, $email);
header('Location: login.php');
exit;
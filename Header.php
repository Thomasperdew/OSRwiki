<?php
session_start();
?>

 <img src="icon.png" class="icon-item"></img><h1 style="float:left; margin:0;"><a href="index.php">OSRwiki</a></h1>

 <?php
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {?>
<a href="Login.php" class="login-item">Login</a>
<?php
}
else {
	?>
	<a href="logout.php" class="login-item">Logout</a>
	<?php
}
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
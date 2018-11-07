<?php
session_start();
?>

 <img src="icon.png" class="icon-item"></img><h1 style="float:left; margin:0;"><a href="Index.php">OSRwiki</a></h1>

 <?php
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {?>
<a href="Login.php" class="login-item">Login</a>
<?php
}
else {
	?>
	<a href="Logout.php" class="login-item">Logout</a>
	<?php
}
?>
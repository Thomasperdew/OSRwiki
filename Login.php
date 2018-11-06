<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Loginstylesheet.css" />
</head>
<body>
<h1><a href="/Website/Index.php">OSRwiki</a></h1>
    <table>
        <tr>
            <td>
				<?php if (isset($_SESSION['messages'])) {
				foreach ($_SESSION['messages'] as $message) {?>
				<div class="message <?php echo isset($_SESSION['validated']) ? $_SESSION['validated'] : '';?>"><?php
				echo $message; ?></div>
				<?php  }
				unset($_SESSION['messages']);
				?> </div>
				<?php } ?>

                <form method="post" action="handler2.php">
                    <div class="imgcontainer">
                        <img src="icon.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" value= "" required>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <button type="submit" value="Submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="password">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </td>
            <td>
                <form method="post" action="handler.php">
                    <div class="imgcontainer">
                        <img src="icon.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <button type="submit" value="Submit">Signup</button>
                        <label>
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

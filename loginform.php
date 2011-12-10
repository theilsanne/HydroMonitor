<form action="doLogin.php" method="get">
Username: <input type="text" name="username" />
Password: <input type="password" name="password" />
<input type="submit" />
</form>

<?php
if (($_GET["username"] == "user") && $GET["password"] == "pass123")) {
	include('success.php');
else {
	include('fail.php');
?>

<?php
	session_start();
	include("projectSecretDiaryConnection.php");

	$query="UPDATE users SET diary='".mysqli_real_escape_string($link, $_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
	mysqli_query($link,$query);
	//print_r($_SESSION);

?>
<!--<form method="post">
<input name="diary" />
<input type="submit" />
</form>-->
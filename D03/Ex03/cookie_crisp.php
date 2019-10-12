<?php
	if ($_GET["action"] == "set" ) 
	{
		setcookie($_GET["name"], $_GET["value"], time() + 3600, "/");
			echo "Cookie: ".$_GET["name"]." has been set to: ".$_GET["value"]."\r\n";
	}
	if ($_GET["action"] == "get")
		if ((strlen($_COOKIE[$_GET["name"]]) > 0))
			echo "Cookie: ".$_GET["name"]."'s value is: ".$_COOKIE[$_GET["name"]]."\r\n";
		else
			echo "Cookie was deleted or does not exist";
	if ($_GET["action"] == "del")
	{
		setcookie($_GET["name"], "", time() - 3600, "/");
		echo ("Cookie is deleted\n");
	}
?>
<?php

@session_name("armatuentorno");
@session_start();
unset($_SESSION['products-ae']['19309P']);
$_SESSION["environment"] = $_POST["environment"];
if ($_SESSION["environment"] == 'STEPS') {
	unset($_SESSION['products-ae']);
}


?>
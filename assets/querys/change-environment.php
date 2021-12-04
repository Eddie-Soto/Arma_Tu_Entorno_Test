<?php

@session_name("armatuentorno");
@session_start();
unset($_SESSION['products-ae']['19309P']);
$_SESSION["environment"] = $_POST["environment"];
unset($_SESSION['products-ae']);

?>
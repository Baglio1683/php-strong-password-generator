<?php

include_once __DIR__ . "/function.php";

echo $_SESSION["pass_key"];

session_destroy();

?>
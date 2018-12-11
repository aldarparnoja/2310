<?php

include 'functions.php';

check_user();

var_dump($_COOKIE);

echo "sisselogimine onnestus, " . $_COOKIE['user'];

?>

<a href="logout.php">Logi valja</a>
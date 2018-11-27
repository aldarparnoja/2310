<?php

//sessiooni lopetamine (peale seda kaob juurdepaas kasutusoigust kontrollivatele lehtedele.)

session_start();
unset($_SESSION['kasutaja']);
header("Location:index.php");
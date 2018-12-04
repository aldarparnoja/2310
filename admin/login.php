<?php

// echo hash('sha256', 'password');


session_start();

$conn = mysqli_connect('localhost', 'root', '');

//kontroll

if (isset($_POST['sisesta'])) {
    $user = $_POST['kasutaja'];
    $pass = hash ('md5', $_POST['parool']);

    $sql = "SELECT * FROM ms17.users WHERE username='$user' AND password='$pass'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    
    
    if($row) {
        $_SESSION['kasutaja'] = $user;
        header("Location:thanks.php");
    } else {
        echo "Sisselogimine ei onnestu";
    }
}

?>
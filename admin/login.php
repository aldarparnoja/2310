<?php

// echo hash('sha256', 'password');


session_start();


// $cookie_name = 'id';
// $cookie_value = 'MS17';
// setcookie($cookie_name, $cookie_value, time()+30);

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
        $cookie_name = 'user';
        
        setcookie($cookie_name, $_SESSION['kasutaja'], time()+30);
        header("Location:thanks.php");
    } else {
        echo "Sisselogimine ei onnestu";
    }
}

?>
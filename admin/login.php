<?php

//include('../conf.php');

//$db = db_connect($server, $user, $pass);


$conn = mysqli_connect('localhost', 'root', '');

//kontroll

if (isset($_POST['sisesta'])) {
    $user = $_POST['kasutaja'];
    $pass = $_POST['parool'];

    $sql = "SELECT * FROM ms17.users WHERE username='$user' AND password ='$pass'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row) {
        echo "Teie sisselogimine onnestus";
    } else {
        echo "Sisselogimine ei onnestu";
    }
}

?>
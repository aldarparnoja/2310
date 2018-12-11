<!DOCTYPE html>
<body>
    <a href="../index.php">Avalehele</a>
    <br>
    <a href="../admin/index.php">Logi sisse</a>
    <h1>Registreeri</h1>
    <form method="post">
        <input type="text" name="kasutaja" placeholder="kasutajanimi">
        <input type="password" name="parool" placeholder="parool">
        <input type="password" name="parool2" placeholder="parooli kordus">
        <button type="submit" name="register">Registreeru</button>
        <button type="reset">Puhasta valjad</button>
    </form>
</body>
</html>


<?php
    $conn = mysqli_connect('localhost', 'root', '');
    
    if (isset($_POST['register'])) {
        $user = $_POST['kasutaja'];
        $pass = ($_POST['parool']);
        $check = ($_POST['parool2']);

        if ($pass == "") {
            die(header("Location: reg.php"));
        }

        if ($pass == $check) {
            $sql = "SELECT * FROM ms17.users WHERE username='$user'";
            $user_check = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($user_check);

            if (!$row) {
                $pass = hash('md5', $pass);

                $sql = "INSERT INTO ms17.users (username, password) VALUES ('$_POST[kasutaja]','$pass')";

                mysqli_query($conn, $sql);

                echo "registreerimine onnestus!";
            }
            else {
                echo "Selline kasutja on juba olemas";
            }
        }
        else {
            echo "Paroolid ei klapi";
        }
    }

?>
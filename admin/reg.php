<?php
    $conn = mysqli_connect('localhost', 'root', '');
    
    if (isset($_POST['sisesta'])) {
        $user = $_POST['kasutaja'];
        $pass = ($_POST['parool']);
    
        $sql = "INSERT INTO ms17.users(username, password) VALUES ($_POST['kasutaja'],$_POST['parool'])";
        mysqli_query($conn, $sql);
    }

?>

<!DOCTYPE html>
<body>
    <h1>Registreeri</h1>
    <form method="post">
        <input type="text" name="kasutaja" placeholder="kasutajanimi">
        <input type="password" name="parool" placeholder="parool">
        <input type="password" name="parool" placeholder="parooli kordus">
        <button type="submit" name="register">Registreeru</button>
        <button type="reset">Puhasta valjad</button>
    </form>
</body>
</html>
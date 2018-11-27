<!DOCTYPE html>
<body>
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

        echo var_dump($_POST);
    
        $sql = "INSERT INTO ms17.users
        (username, password) VALUES 
        ('$_POST[kasutaja]' , '$_POST[parool]')";

        echo var_dump($sql);
        mysqli_query($conn, $sql);
    }

?>
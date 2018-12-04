<?php
include('login.php');


?>

<!DOCTYPE html>
<body>
    <a href="../index.php">Avalehele</a>
    <form method="post">
        <input type="text" name="kasutaja" placeholder="kasutajanimi">
        <input type="password" name="parool" placeholder="parool">
        <button type="submit" name="sisesta">Logi sisse</button>
        <button type="reset">Puhasta valjad</button>
    </form>
</body>
</html>

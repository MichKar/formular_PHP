<?php

// připojení do databáze
include "mysql/db.php";
Connection();

// výběr všech dat z databáze
selectFun();

// načtení dat z formuláře a dotaz do databáze
if (isset($_POST["submit"])) {
    UpdateFun();
}

?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form action="update.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno"><br>
        <input type="password" name="password" placeholder="Heslo"><br>

        <select name="id" id="">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                echo "<option value='$id'>$id</option>";
            }
            ?>
        </select>

        <input type="submit" name="submit" value="Odeslat">
    </form>
</body>

</html>
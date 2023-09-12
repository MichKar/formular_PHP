<?php

// připojení do databáze
include "mysql/db.php";
Connection();

if (isset($_POST["submit"])) {
    addFun();
}

?>


<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Formuláře v PHP</h1>
    <h2>Formulář - převod dat do databáze</h2>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno"><br>
        <input type="password" name="password" placeholder="Heslo"><br>
        <input type="submit" name="submit" value="Odeslat">
    </form>
</body>

</html>
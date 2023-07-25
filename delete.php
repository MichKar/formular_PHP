<?php
    // načtení funkcí a napojení do databáze
    include "mysql/db.php";
    Connection();


    // výběr všech dat z databáze
    selectFun();


    // Kontrola, zda byl formulář odeslán. Pokud ano, tak, tka podle údajů z formuláře vymazat příslušné ID
    if(isset($_POST["submit"])){
        DeleteFun();
    }

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="delete.php" method="post">
        
        <select name="id" id="">
           <?php
            while($row = mysqli_fetch_assoc($result)){
               $id = $row["id"];
               echo "<option value='$id'>$id</option>"; 
            }
            ?>
        </select>
        
        <input type="submit" name="submit" value="Odeslat">
    </form>

</body>
</html>
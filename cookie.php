<?php

    $name = "MojeCookies";
    $value = 183;
    $expiration = time()+(60*60*24*7);

    setcookie($name,$value,$expiration);
    

?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Učím se cookies</h1>
    <?php

if(isset($_COOKIE["MojeCookies"])){
    $visitor = $_COOKIE["MojeCookies"];
    echo $visitor;
} else {
    $visitor = "";
}
        

    ?>


</body>
</html>